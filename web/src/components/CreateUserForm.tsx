import React, { useState } from 'react';

const CreateUserForm: React.FC = () => {
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [role, setRole] = useState('Player');
    const [message, setMessage] = useState('');

    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();
        const response = await fetch('/api/users', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name, email, password, role }),
        });
        const data = await response.json();
        if (response.ok) {
            setMessage(`User created successfully with ID: ${data.userId}`);
            setName('');
            setEmail('');
            setPassword('');
            setRole('Player');
        } else {
            setMessage(`Error: ${data.error}`);
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <h2>Create User</h2>
            <div>
                <label htmlFor="name">Name:</label>
                <input id="name" type="text" value={name} onChange={(e) => setName(e.target.value)} required />
            </div>
            <div>
                <label htmlFor="email">Email:</label>
                <input id="email" type="email" value={email} onChange={(e) => setEmail(e.target.value)} required />
            </div>
            <div>
                <label htmlFor="password">Password:</label>
                <input id="password" type="password" value={password} onChange={(e) => setPassword(e.target.value)} required />
            </div>
            <div>
                <label htmlFor="role">Role:</label>
                <select id="role" value={role} onChange={(e) => setRole(e.target.value)}>
                    <option value="Coach">Coach</option>
                    <option value="Assistant Coach">Assistant Coach</option>
                    <option value="Player">Player</option>
                    <option value="Parent">Parent</option>
                </select>
            </div>
            <button type="submit">Create User</button>
            {message && <p>{message}</p>}
        </form>
    );
};

export default CreateUserForm;
