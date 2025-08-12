import React, { useState, useEffect } from 'react';

interface UserProfileProps {
    userId: number;
}

const UserProfile: React.FC<UserProfileProps> = ({ userId }) => {
    const [user, setUser] = useState<any>(null);
    const [message, setMessage] = useState('');

    useEffect(() => {
        const fetchUser = async () => {
            const response = await fetch(`/api/users/${userId}`);
            const data = await response.json();
            if (response.ok) {
                setUser(data);
            } else {
                setMessage(`Error: ${data.error}`);
            }
        };
        fetchUser();
    }, [userId]);

    if (message) {
        return <p>{message}</p>;
    }

    if (!user) {
        return <p>Loading...</p>;
    }

    return (
        <div>
            <h2>User Profile</h2>
            <p><strong>Name:</strong> {user.name}</p>
            <p><strong>Email:</strong> {user.email}</p>
            <p><strong>Role:</strong> {user.role}</p>
            <p><strong>Status:</strong> {user.status}</p>
        </div>
    );
};

export default UserProfile;
