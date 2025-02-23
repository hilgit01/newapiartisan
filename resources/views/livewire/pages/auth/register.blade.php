<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        auth()->login($user);

        $this->redirect(route('dashboard'), navigate: true);
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

        .register-page {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('/asset/bbb.png') no-repeat center center/cover;
            background-attachment: fixed;
            padding: 20px;
        }

        .page-title {
            font-weight: 700;
            font-size: 35px;
            color: rgb(255, 255, 255);
            margin-bottom: 35px;
            text-align: center;
            text-shadow: 2px 2px 4px rgb(19, 17, 17);
            max-width: 800px;
        }

        .register-container {
        background: rgba(255, 255, 255, 0.85);
        padding: 40px;
        border-radius: 10px;
        box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 600px;
        text-align: center;
        backdrop-filter: blur(5px);
    }

        .register-container h2 {
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

        .register-btn {
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

        .register-btn:hover {
            background: #0056b3;
        }

        .login-link {
            font-size: 14px;
            color: #2d3a4b;
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #007bff;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .register-container {
                width: 90%;
                padding: 20px;
            }

            .page-title {
                width: 70%;
                font-size: 26px;
            }

            .register-container h2, .input-group label, .input-field, .register-btn {
                font-size: 12px;
            }

            .register-btn {
                padding: 8px;
                font-size: 14px;
            }

            .register-container h2 {
                font-size: 20px;
            }

            .login-link {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .register-container {
                width: 90%;
                padding: 15px;
            }

            .page-title {
                font-size: 20px;
                width: 90%;
            }

            .register-container h2 {
                font-size: 18px;
            }

            .login-link {
                font-size: 10px;
            }
        }
    </style>

    <div class="register-page">
        <h1 class="page-title">SELAMAT DATANG DI SAGARA TUNGKAL</h1>
        
        <div class="register-container">
            <h2>Daftar Akun</h2>
            
            <form wire:submit="register">
                <!-- Name -->
                <div class="input-group">
                    <label for="name">Nama</label>
                    <input 
                        wire:model="name"
                        id="name"
                        type="text"
                        class="input-field"
                        placeholder="Masukkan Nama Anda"
                        required
                        autofocus
                        autocomplete="name"
                    >
                    <div style="color: red; font-size: 12px; margin-top: 5px;">
                        @error('name') {{ $message }} @enderror
                    </div>
                </div>

                <!-- Email -->
                <div class="input-group">
                    <label for="email">Email</label>
                    <input 
                        wire:model="email"
                        id="email"
                        type="email"
                        class="input-field"
                        placeholder="Masukkan Email Anda"
                        required
                        autocomplete="username"
                    >
                    <div style="color: red; font-size: 12px; margin-top: 5px;">
                        @error('email') {{ $message }} @enderror
                    </div>
                </div>

                <!-- Password -->
                <div class="input-group">
                    <label for="password">Kata Sandi</label>
                    <input 
                        wire:model="password"
                        id="password"
                        type="password"
                        class="input-field"
                        placeholder="Masukkan Kata Sandi"
                        required
                        autocomplete="new-password"
                    >
                    <div style="color: red; font-size: 12px; margin-top: 5px;">
                        @error('password') {{ $message }} @enderror
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="input-group">
                    <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                    <input 
                        wire:model="password_confirmation"
                        id="password_confirmation"
                        type="password"
                        class="input-field"
                        placeholder="Konfirmasi Kata Sandi Anda"
                        required
                        autocomplete="new-password"
                    >
                </div>

                <button type="submit" class="register-btn">Daftar</button>
                
                <p class="login-link">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" wire:navigate>
                        Masuk di sini
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>