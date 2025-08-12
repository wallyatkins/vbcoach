# Story 1.1: System Setup and Core Authentication

**Status**: Completed

**Story**
**As a** system administrator,
**I want** the foundational project infrastructure to be set up securely,
**so that** users can securely access the application and I can manage their roles.

**Acceptance Criteria**
1. The project repository is initialized with a monorepo structure, including separate directories for the PHP API backend and React frontend.
2. The Apache web server is configured to serve the React frontend build artifacts.
3. A PostgreSQL database is set up and accessible by the backend.
4. Basic username/password authentication (login, logout, password hashing) is implemented for all user roles (Coach, Assistant Coach, Player, Parent).
5. User roles (Coach, Assistant Coach, Player, Parent) are defined with distinct permissions for accessing system functionalities.
6. Role-based access controls are implemented, ensuring each role has the defined access permissions:
    * **Coach**: Full access to manage their team, including assistant coaches, and viewing all player data.
    * **Assistant Coach**: Full access to manage their team (except the head coach), and viewing all player data.
    * **Player**: Can view their own profile, their stats and team stats, team schedule, team roster, communication features, and training resources. Cannot edit their own profile.
    * **Parent**: Can view the team schedule, team roster, general team communication, and coaching vision. Cannot view stats. Can update their child's availability.
7. A health-check endpoint or a simple canary page is deployed and accessible.

**Tasks / Subtasks**
- [ ] **Task 1: Project Scaffolding (AC: #1)**
    - [ ] Create root directory `vbcoach`.
    - [ ] Initialize a Git repository.
    - [ ] Create `api` directory for the PHP backend.
    - [ ] Create `web` directory for the React frontend.
- [ ] **Task 2: Backend Setup (AC: #3, #4, #5, #6)**
    - [ ] Set up a basic PHP project in the `api` directory.
    - [ ] Establish a connection to the PostgreSQL database.
    - [ ] Create database schema for users and roles.
    - [ ] Implement user authentication endpoints (login, logout).
    - [ ] Implement password hashing using a strong algorithm.
    - [ ] Implement role-based access control logic.
- [ ] **Task 3: Frontend Setup (AC: #1, #2)**
    - [ ] Set up a new React application in the `web` directory.
    - [ ] Configure the React app to be served by Apache.
- [ ] **Task 4: Health Check (AC: #7)**
    - [ ] Create a health-check endpoint on the API.
    - [ ] Create a simple canary page on the frontend that consumes the health-check.
- [ ] **Task 5: Documentation**
    - [ ] Document the setup and configuration steps in a `README.md` file.

**Dev Notes**
*   **Tech Stack**: PHP (backend), React (frontend), PostgreSQL (database), Apache (web server).
*   **Source Tree**: The monorepo will have `api/` and `web/` directories.
*   **Authentication**: Use a standard, secure library for password hashing in PHP (e.g., `password_hash()`).
*   **Database**: The connection details should be configurable and not hardcoded.

**Testing**
*   Unit tests should be written for authentication logic.
*   API endpoints should be tested with a tool like Postman or through integration tests.
*   Frontend components related to authentication should have basic tests.

**Change Log**
| Date | Version | Description | Author |
| --- | --- | --- | --- |
| 2025-08-06 | 1.0 | Initial draft | BMad |

**Dev Agent Record**
**Agent Model Used**:
**Debug Log References**:
**Completion Notes List**:
**File List**:

**QA Results**
