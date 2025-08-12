# Story 1.2: User Profile Creation and Management

**Status**: Completed

**Story**
**As a** Coach,
**I want** to create and manage user profiles for Assistant Coaches, Players, and Parents,
**so that** they can access the application and have their basic information stored.

**Acceptance Criteria**
1.  Coaches can create new user accounts for Assistant Coaches, Players, and Parents, assigning their initial roles.
2.  Coaches can view and edit basic user profile information (e.g., name, contact details).
3.  Users (including Players and Parents) can view their own basic profile information, and access team-related data based on their role's defined permissions.
4.  User accounts can be enabled/disabled.

**Tasks / Subtasks**
- [x] **Task 1: Create User Profile UI (AC: #1, #2)**
    - [x] Design a form for creating and editing user profiles.
    - [x] Implement the React component for the user profile form.
- [x] **Task 2: Backend for Profile Management (AC: #1, #2, #4)**
    - [x] Create API endpoints for creating, reading, updating, and disabling user profiles.
    - [x] Implement the business logic for profile management in the backend.
- [x] **Task 3: Frontend Profile Viewing (AC: #3)**
    - [x] Create a view for users to see their own profile.
    - [x] Implement the logic to fetch and display the user's own data.

**Dev Notes**
*   **Tech Stack**: PHP (backend), React (frontend), PostgreSQL (database), Apache (web server).
*   **Source Tree**: The monorepo will have `api/` and `web/` directories.
*   **Authentication**: This story builds on the authentication from Story 1.1. Ensure that only authenticated Coaches can access the profile management features.
*   **Database**: The user profile information will be stored in the `users` table created in Story 1.1.

**Testing**
*   Unit tests should be written for the new API endpoints.
*   The user profile form and view should have basic React component tests.
*   End-to-end tests should cover the creation and editing of a user profile.

**Change Log**
| Date | Version | Description | Author |
| --- | --- | --- | --- |
| 2025-08-08 | 1.0 | Initial draft | BMad |

**Dev Agent Record**
**Agent Model Used**:
**Debug Log References**:
**Completion Notes List**:
**File List**:

**QA Results**
