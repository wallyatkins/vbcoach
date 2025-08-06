# Epic 1: Foundation & User Management

**Epic Goal**: Establish the core project infrastructure, set up user authentication and authorization, and implement basic user profile management for coaches, assistant coaches, and players. This epic delivers the foundational system for all subsequent features, ensuring secure access and basic user data management.

### Story 1.1: System Setup and Core Authentication

**As a** system administrator,
**I want** the foundational project infrastructure to be set up securely,
**so that** users can securely access the application and I can manage their roles.

**Acceptance Criteria**
1.  **1:** The project repository is initialized with a monorepo structure, including separate directories for the PHP API backend and React frontend.
2.  **2:** The Apache web server is configured to serve the React frontend build artifacts.
3.  **3:** A PostgreSQL database is set up and accessible by the backend.
4.  **4:** Basic username/password authentication (login, logout, password hashing) is implemented for all user roles (Coach, Assistant Coach, Player, Parent).
5.  **5:** User roles (Coach, Assistant Coach, Player, Parent) are defined with distinct permissions for accessing system functionalities.
6.  **6:** Role-based access controls are implemented, ensuring each role has the defined access permissions:
    * **Coach**: Full access to manage their team, including assistant coaches, and viewing all player data.
    * **Assistant Coach**: Full access to manage their team (except the head coach), and viewing all player data.
    * **Player**: Can view their own profile, their stats and team stats, team schedule, team roster, communication features, and training resources. Cannot edit their own profile.
    * **Parent**: Can view the team schedule, team roster, general team communication, and coaching vision. Cannot view stats. Can update their child's availability.
7.  **7:** A health-check endpoint or a simple canary page is deployed and accessible.

### Story 1.2: User Profile Creation and Management

**As a** Coach,
**I want** to create and manage user profiles for Assistant Coaches, Players, and Parents,
**so that** they can access the application and have their basic information stored.

**Acceptance Criteria**
1.  **1:** Coaches can create new user accounts for Assistant Coaches, Players, and Parents, assigning their initial roles.
2.  **2:** Coaches can view and edit basic user profile information (e.g., name, contact details).
3.  **3:** Users (including Players and Parents) can view their own basic profile information, and access team-related data based on their role's defined permissions.
4.  **4:** User accounts can be enabled/disabled.
