import React, { useState, useEffect } from 'react';

interface EditUserFormProps {
    userId: number;
    onUserUpdated: () => void;
}

const EditUserForm: React.FC<EditUserFormProps> = ({ userId, onUserUpdated }) => {
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [message, setMessage] = useState('');

    useEffect(() => {
        const fetchUser = async () => {
            const response = await fetch(`/api/users/${userId}`);
            const data = await response.json();
            if (response.ok) {
                setName(data.name);
                setEmail(data.email);
            } else {
                setMessage(`Error: ${data.error}`);
            }
        };
        fetchUser();
    }, [userId]);

    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();
        const response = await fetch(`/api/users/${userId}`, {
            method: 'PUT',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ name, email }),
        });
        const data = await response.json();
        if (response.ok) {
            setMessage('User updated successfully');
            onUserUpdated();
        } else {
            setMessage(`Error: ${data.error}`);
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <h2>Edit User</h2>
            <div>
                <label>Name:</label>
                <input type="text" value={name} onChange={(e) => setName(e.target.value)} required />
            </div>
            <div>
                <label>Email:</label>
                <input type="email" value={email} onChange={(e) => setEmail(e.target.value)} required />
            </div>
            <button type="submit">Update User</button>
            {message && <p>{message}</p>}
        </form>
    );
};

export default EditUserForm;
