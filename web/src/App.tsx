import './App.css';
import CreateUserForm from './components/CreateUserForm';
import EditUserForm from './components/EditUserForm';
import UserProfile from './components/UserProfile';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <h1>VBCoach</h1>
      </header>
      <main>
        <CreateUserForm />
        <hr />
        {/* Hardcoded userId for now, this would come from app state */}
        <EditUserForm userId={1} onUserUpdated={() => console.log('User updated!')} />
        <hr />
        <UserProfile userId={1} />
      </main>
    </div>
  );
}

export default App;
