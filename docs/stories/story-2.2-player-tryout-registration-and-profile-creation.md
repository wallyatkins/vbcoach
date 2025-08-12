# Story 2.2: Player Tryout Registration & Profile Creation

**Status**: Draft

**Story**
**As a** new Player or Parent,
**I want** to register for tryouts and create a basic player profile,
**so that** coaches have my preliminary information for assessment.

**Acceptance Criteria**
1.  Players or their Parents can register for a specific tryout event.
2.  During registration, basic player profile information can be captured (e.g., full name, date of birth, grade level, contact information).
3.  A unique tryout number is automatically assigned to each registered player.
4.  A profile photo can be optionally uploaded for player identification.
5.  Registered players' basic profiles are created in the system, associated with the tryout.

**Tasks / Subtasks**
- [ ] **Task 1: Registration Form UI (AC: #1, #2, #4)**
    - [ ] Design the player registration form.
    - [ ] Implement the React component for the registration form.
- [ ] **Task 2: Backend for Registration (AC: #1, #2, #3, #5)**
    - [ ] Create API endpoints for player registration.
    - [ ] Implement the logic to create a new player profile and associate it with the tryout.
    - [ ] Implement the logic to generate a unique tryout number.
- [ ] **Task 3: Photo Upload (AC: #4)**
    - [ ] Implement the file upload functionality for the profile photo.
    - [ ] Store the uploaded photo securely.

**Dev Notes**
*   **Public Facing**: This will be a public-facing form, so it needs to be user-friendly and secure.
*   **Data Validation**: All user-submitted data must be validated.
*   **Tryout Number**: The tryout number should be unique per tryout event.

**Testing**
*   Unit tests for the registration API endpoints.
*   Component tests for the registration form.
*   Tests for the photo upload functionality.

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
