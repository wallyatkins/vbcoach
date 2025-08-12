# Story 2.4: Player Position and Role Flagging

**Status**: Draft

**Story**
**As a** Coach or Assistant Coach,
**I want** to flag a player's potential position(s) or role(s) during tryouts,
**so that** I can track potential team fit and strategic considerations early.

**Acceptance Criteria**
1.  Coaches and Assistant Coaches can assign one or more potential positions (e.g., Setter, Hitter, Libero) to a player during the tryout assessment phase.
2.  Coaches and Assistant Coaches can assign one or more potential roles (e.g., 5-1 Setter, 6-2 Hitter) to a player during the tryout assessment phase.
3.  These flags are visible when reviewing player assessment data.

**Tasks / Subtasks**
- [ ] **Task 1: UI for Flagging (AC: #1, #2)**
    - [ ] Add controls to the assessment interface to allow for flagging positions and roles.
- [ ] **Task 2: Backend for Flags (AC: #1, #2)**
    - [ ] Create API endpoints for saving and updating player position and role flags.
    - [ ] Implement the business logic for storing these flags.
- [ ] **Task 3: Display Flags (AC: #3)**
    - [ ] Update the player assessment view to display the assigned flags.

**Dev Notes**
*   **Data Model**: This will likely require a new table or a modification to an existing table to store the position and role flags.
*   **Flexibility**: The system should allow for multiple positions and roles to be assigned to a single player.

**Testing**
*   Unit tests for the new API endpoints.
*   Component tests for the UI controls for flagging.
*   Tests to ensure the flags are displayed correctly.

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
