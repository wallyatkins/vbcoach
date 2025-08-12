# Story 3.2: Team Roster Creation & Tiered Selection Enforcement

**Status**: Draft

**Story**
**As a** Coach,
**I want** to select players for specific teams from the tryout pool and transition them to an official roster,
**so that** the team composition is finalized according to eligibility rules and selection tiers.

**Acceptance Criteria**
1.  Coaches can select players from the tryout pool to assign them to a specific team (e.g., Varsity, JV).
2.  The system automatically validates player eligibility (age, grade) for the selected team based on configured rules, preventing invalid assignments.
3.  For multi-team tryouts with tiered selection (e.g., Varsity picks first, then JV picks from remaining, respecting age/grade restrictions), the system guides the coach through the selection order.
4.  Coaches can define and apply a maximum number of players per team.
5.  Once selections are finalized, players are officially moved to the team's active roster for the current season.

**Tasks / Subtasks**
- [ ] **Task 1: Roster Creation UI (AC: #1, #3, #4)**
    - [ ] Design the interface for selecting players and creating a roster.
    - [ ] Implement the React component for the roster creation process.
- [ ] **Task 2: Backend for Roster Creation (AC: #1, #2, #3, #4, #5)**
    - [ ] Create API endpoints for creating and managing team rosters.
    - [ ] Implement the business logic for eligibility validation and tiered selection.
- [ ] **Task 3: Database Schema for Rosters (AC: #5)**
    - [ ] Design and create the necessary database tables for team rosters.

**Dev Notes**
*   **Complex Logic**: The tiered selection and eligibility validation logic will be complex.
*   **User Guidance**: The UI should clearly guide the coach through the selection process, especially for tiered selection.
*   **Data Integrity**: It's critical to ensure that only eligible players are added to a roster.

**Testing**
*   Unit tests for the new API endpoints.
*   Thorough testing of the eligibility validation and tiered selection logic.
*   Component tests for the roster creation interface.

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
