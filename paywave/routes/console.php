<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Log;
use App\Models\Employee;
use App\Models\PaymentLog;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('paywave:process-payments', function () {
    $employees = Employee::all();

    foreach ($employees as $employee) {
        try {
            $paymentStatus = simulatePayment($employee);
            PaymentLog::create([
                'employee_id' => $employee->id,
                'amount' => $employee->salary,
                'status' => $paymentStatus['status'],
                'error_message' => $paymentStatus['status'] === 'failure' ? $paymentStatus['message'] : null
            ]);

            $this->info("Payment processed for employee: {$employee->name}, Status: {$paymentStatus['status']}");
        } catch (Exception $e) {
            $this->error("Payment failed for employee: {$employee->name}, Error: {$e->getMessage()}");
        }
    }

    $this->info('Payment processing completed.');
})->describe('Process employee payments and log results');

function simulatePayment($employee)
{
    return $employee->salary > 0
        ? ['status' => 'success']
        : ['status' => 'failure', 'message' => 'Invalid salary amount'];
}

app(Schedule::class)->command('paywave:process-payments')->daily();
