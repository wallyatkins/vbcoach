# Story 3.3: In-Season Roster Adjustments

**Status**: Draft

**Story**
**As a** Coach,
**I want** to manage roster changes during a season,
**so that** the team information remains accurate despite injuries, new players, or players leaving.

**Acceptance Criteria**
1.  Coaches can mark a player as injured, noting the injury details and expected return date.
2.  Coaches can add new players to the roster mid-season.
3.  Coaches can remove players from the roster, noting the reason for their departure.
4.  All roster changes include a timestamp and allow for an optional explanatory note.
5.  The system maintains a historical log of roster changes for audit purposes.

**Tasks / Subtasks**
- [ ] **Task 1: Roster Adjustment UI (AC: #1, #2, #3, #4)**
    - [ ] Design the interface for managing in-season roster adjustments.
    - [ ] Implement the React component for roster adjustments.
- [ ] **Task 2: Backend for Roster Adjustments (AC: #1, #2, #3, #4, #5)**
    - [ ] Create API endpoints for making roster adjustments.
    - [ ] Implement the business logic for handling roster changes and logging them.
- [ ] **Task 3: Database Schema for Roster Log (AC: #5)**
    - [ ] Design and create the necessary database tables for logging roster changes.

**Dev Notes**
*   **Audit Trail**: The historical log of roster changes is a key feature.
*   **User-Friendly**: The interface for making roster adjustments should be simple and intuitive.
*   **Data Integrity**: Ensure that all roster changes are accurately recorded.

**Testing**
*   Unit tests for the new API endpoints.
*   Component tests for the roster adjustment interface.
*   Tests to ensure that the roster change log is accurate and complete.

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
