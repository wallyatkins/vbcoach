# Story 6.1: Basic In-App Messaging

**Status**: Draft

**Story**
**As a** Coach, Assistant Coach, or Player,
**I want** to send and receive direct and group messages within the application,
**so that** team communication is centralized and efficient.

**Acceptance Criteria**
1.  Users can send direct messages to other individual users (Coach to Player, Player to Player, Coach to Assistant Coach, etc.).
2.  Users can send group messages to defined groups (e.g., entire team, all coaches, specific position groups).
3.  Messages are stored and displayed in a chronological conversation view.
4.  Coaches can initiate messages with players, assistant coaches, and parents.
5.  Players can initiate messages with coaches and teammates.
6.  The messaging interface is intuitive and easy to use.

**Tasks / Subtasks**
- [ ] **Task 1: Messaging UI (AC: #1, #2, #3, #6)**
    - [ ] Design the messaging interface.
    - [ ] Implement the React component for the messaging view.
- [ ] **Task 2: Backend for Messaging (AC: #1, #2, #3, #4, #5)**
    - [ ] Create API endpoints for sending, receiving, and storing messages.
    - [ ] Implement the business logic for direct and group messaging.
- [ ] **Task 3: Database Schema for Messaging (AC: #3)**
    - [ ] Design and create the necessary database tables for storing messages and conversations.

**Dev Notes**
*   **Real-time Messaging**: Consider using WebSockets for real-time messaging, or a polling mechanism for a simpler implementation.
*   **User Groups**: The system will need a way to define and manage user groups for group messaging.
*   **Security**: Ensure that only authorized users can access conversations.

**Testing**
*   Unit tests for the new API endpoints.
*   Component tests for the messaging view.
*   Thorough testing of the direct and group messaging functionality.

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
