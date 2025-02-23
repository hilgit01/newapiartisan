<?php
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    public function login(): void
    {
        $this->validate();
        $this->form->authenticate();
        Session::regenerate();
        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .login-page {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('/asset/bbb.png') no-repeat center center/cover;
            background-attachment: fixed;
            width: 100%;
            padding: 20px;
        }

        .page-title {
            font-weight: 700;
            font-size: 35px;
            color: rgb(255, 255, 255);
            margin-bottom: 35px;
            text-align: center;
            text-shadow: 2px 2px 4px rgb(19, 17, 17);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.3);
            width: 500px;
            text-align: center;
            backdrop-filter: blur(5px);
        }

        .login-container h2 {
            font-weight: 700;
            color: rgb(83, 133, 199);
            margin-bottom: 20px;
        }

        .input-group {
            text-align: left;
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            color: #2d3a4b;
            margin-bottom: 5px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .remember-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            color: #2d3a4b;
            margin-bottom: 15px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background: #1e88e5;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-btn:hover {
            background: #0056b3;
        }

        .register-link {
            font-size: 14px;
            color: #2d3a4b;
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }

            .page-title {
                font-size: 26px;
            }

            .login-container h2 {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 15px;
            }

            .page-title {
                font-size: 20px;
            }

            .login-container h2 {
                font-size: 18px;
            }
        }
    </style>

    <div class="login-page">
        <h1 class="page-title">SELAMAT DATANG DI SAGARA TUNGKAL</h1>
        
        <div class="login-container">
            <h2>Masuk</h2>

            <form wire:submit="login">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input wire:model="form.email" id="email" type="email" class="input-field" placeholder="Masukkan Email Anda" required autofocus autocomplete="username">
                    <div style="color: red; font-size: 12px; margin-top: 5px;">
                        @error('form.email') {{ $message }} @enderror
                    </div>
                </div>

                <div class="input-group">
                    <label for="password">Kata Sandi</label>
                    <input wire:model="form.password" id="password" type="password" class="input-field" placeholder="Masukkan Kata Sandi Anda" required autocomplete="current-password">
                    <div style="color: red; font-size: 12px; margin-top: 5px;">
                        @error('form.password') {{ $message }} @enderror
                    </div>
                </div>

                <div class="remember-group">
                    <label for="remember">
                        <input wire:model="form.remember" id="remember" type="checkbox" name="remember">
                        <span>Ingat Saya</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" wire:navigate class="forgot-link">
                            Lupa Password?
                        </a>
                    @endif
                </div>

                <button type="submit" class="login-btn">Masuk</button>

                <p class="register-link">
                    Belum punya akun? 
                    <a href="{{ route('register') }}" wire:navigate>
                        Daftar di sini
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>
