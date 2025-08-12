# Story 4.3: Match Lineup and Rotation Setting

**Status**: Draft

**Story**
**As a** Coach or Assistant Coach,
**I want** to set strategic rotations (e.g., 5-1 vs. 6-2) and create specific match lineups,
**so that** I can effectively plan for upcoming games.

**Acceptance Criteria**
1.  Coaches and Assistant Coaches can access a dedicated interface for creating and managing match lineups.
2.  The interface allows for selection of a rotation type (e.g., 5-1, 6-2).
3.  Coaches can drag-and-drop or select players into specific lineup positions for each rotation.
4.  The system displays player names and positions clearly within the lineup configuration.
5.  Lineups can be saved and retrieved for specific matches.

**Tasks / Subtasks**
- [ ] **Task 1: Lineup Creation UI (AC: #1, #2, #3, #4)**
    - [ ] Design the interface for creating and managing match lineups.
    - [ ] Implement the React component for the lineup creation view.
- [ ] **Task 2: Backend for Lineups (AC: #1, #2, #3, #4, #5)**
    - [ ] Create API endpoints for managing match lineups.
    - [ ] Implement the business logic for creating, saving, and retrieving lineups.
- [ ] **Task 3: Database Schema for Lineups (AC: #5)**
    - [ ] Design and create the necessary database tables for match lineups.

**Dev Notes**
*   **Drag-and-Drop**: A drag-and-drop interface would be ideal for this feature.
*   **Visual Representation**: The lineup should be displayed in a clear and visual way.
*   **Flexibility**: The system should be flexible enough to handle different types of rotations and lineups.

**Testing**
*   Unit tests for the new API endpoints.
*   Component tests for the lineup creation view.
*   Tests for the drag-and-drop functionality.

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
