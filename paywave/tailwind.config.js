import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/brandymedia/turbine-ui-core/**/*.php',


  ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    daisyui: {
        themes: [
          // "business",
            // "lofi",
          {
            mytheme: {
              
    "primary": "#6366f1",
              
    "secondary": "#0037ff",
              
    "accent": "#ea8c00",
              
    "neutral": "#080400",
              
    "base-100": "#20242e",
              
    "info": "#0063f9",
              
    "success": "#9ffd00",
              
    "warning": "#d55500",
              
    "error": "#ee2437",
    
              },
            },
          ],
        },
    plugins: [
        require('daisyui'),
    ],
};
