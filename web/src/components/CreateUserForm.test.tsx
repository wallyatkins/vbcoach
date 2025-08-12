// src/components/CreateUserForm.test.tsx
import { render, screen, fireEvent, waitFor } from '@testing-library/react';
import { describe, it, expect, vi } from 'vitest';
import CreateUserForm from './CreateUserForm';

describe('CreateUserForm', () => {
    it('renders the form correctly', () => {
        render(<CreateUserForm />);
        expect(screen.getByLabelText('Name:')).toBeInTheDocument();
        expect(screen.getByLabelText('Email:')).toBeInTheDocument();
        expect(screen.getByLabelText('Password:')).toBeInTheDocument();
        expect(screen.getByLabelText('Role:')).toBeInTheDocument();
        expect(screen.getByRole('heading', { name: /create user/i })).toBeInTheDocument();
        expect(screen.getByRole('button', { name: /create user/i })).toBeInTheDocument();
    });

    it('submits the form and shows a success message', async () => {
        // Mock the fetch function
        global.fetch = vi.fn(() =>
            Promise.resolve({
                ok: true,
                json: () => Promise.resolve({ userId: 123 }),
            } as Response)
        );

        render(<CreateUserForm />);

        // Fill out the form
        fireEvent.change(screen.getByLabelText('Name:'), { target: { value: 'Test User' } });
        fireEvent.change(screen.getByLabelText('Email:'), { target: { value: 'test@example.com' } });
        fireEvent.change(screen.getByLabelText('Password:'), { target: { value: 'password123' } });
        fireEvent.change(screen.getByLabelText('Role:'), { target: { value: 'Player' } });

        // Submit the form
        fireEvent.click(screen.getByRole('button', { name: /create user/i }));

        // Wait for the success message
        await waitFor(() => {
            expect(screen.getByText('User created successfully with ID: 123')).toBeInTheDocument();
        });
    });
});
