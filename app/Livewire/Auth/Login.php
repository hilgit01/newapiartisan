namespace App\Livewire\Pages\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->validate();
        $this->form->authenticate();
        Session::regenerate();
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.pages.auth.login');
    }
}
