import { useState, useEffect } from 'react';
import './App.css';

function App() {
  const [status, setStatus] = useState('loading...');

  useEffect(() => {
    fetch('/api/health-check')
      .then((res) => res.json())
      .then((data) => setStatus(data.status))
      .catch(() => setStatus('error'));
  }, []);

  return (
    <div className="App">
      <header className="App-header">
        <h1>Volleyball Coach</h1>
        <p>API Status: {status}</p>
      </header>
    </div>
  );
}

export default App;
