# Story 2.1: Tryout Event Configuration

**Status**: Draft

**Story**
**As a** Coach,
**I want** to set up tryout events for single or multiple teams,
**so that** I can manage the tryout process and define team eligibility.

**Acceptance Criteria**
1.  Coaches can create new tryout events, specifying date, time, and location.
2.  Coaches can define multiple teams for a single tryout event (e.g., Varsity, JV, specific club tiers).
3.  Coaches can set eligibility rules for each defined team based on criteria such as age and grade level.
4.  The system enforces eligibility rules, preventing players from being considered for teams they don't qualify for.
5.  Coaches can add general tryout information (e.g., instructions, expectations) for players/parents to view.

**Tasks / Subtasks**
- [ ] **Task 1: Tryout Event Creation UI (AC: #1, #2, #3, #5)**
    - [ ] Design a form for creating and configuring tryout events.
    - [ ] Implement the React component for the tryout event form.
- [ ] **Task 2: Backend for Tryout Configuration (AC: #1, #2, #3, #4)**
    - [ ] Create API endpoints for creating, reading, and updating tryout events.
    - [ ] Implement the business logic for managing tryout events and eligibility rules.
- [ ] **Task 3: Database Schema for Tryouts (AC: #1, #2, #3)**
    - [ ] Design and create the necessary database tables for tryouts, teams, and eligibility rules.

**Dev Notes**
*   **Tech Stack**: PHP (backend), React (frontend), PostgreSQL (database), Apache (web server).
*   **Data Model**: This will require new tables for `tryouts`, `tryout_teams`, and `eligibility_rules`.
*   **Validation**: Input validation will be critical for eligibility rules to ensure they are logical and enforceable.

**Testing**
*   Unit tests for the new API endpoints.
*   Tests for the eligibility rule enforcement logic.
*   Component tests for the tryout event form.

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
