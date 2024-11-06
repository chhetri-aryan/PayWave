@vite('resources/css/app.css')

<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">PayWave 🌊</h1>
            <p class="py-6">
                Empowering teams through seamless payroll management—because every detail matters.
            </p>
        </div>
        
        <div class="card bg-base-100 w-full max-w-lg shrink-0 shadow-2xl">
            <!-- Login Form -->
            <form action="{{ url('/login') }}" method="POST" class="card-body">
                @csrf <!-- CSRF Token for security -->
                
                <!-- Display Success and Error Messages -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                
                <!-- Username Field -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Username</span>
                    </label>
                    <input 
                        type="text" 
                        name="username" 
                        placeholder="Enter username" 
                        class="input input-bordered"
                        required
                    />
                </div>
                
                <!-- Password Field -->
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Enter password" 
                        class="input input-bordered"
                        required
                    />
                    <label class="label">
                        <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                    </label>
                </div>
                
                <!-- Submit Button -->
                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
