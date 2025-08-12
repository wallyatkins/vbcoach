# Story 5.1: Game-Day Stat Entry

**Status**: Draft

**Story**
**As a** Coach or Assistant Coach,
**I want** to easily record specific game-day volleyball statistics for players,
**so that** I can track individual and team performance.

**Acceptance Criteria**
1.  Coaches and Assistant Coaches can access a dedicated interface for entering game-day statistics for players.
2.  The interface supports input for the following stat categories: General (Sets Played), Serving (Service Attempts, Aces, Service Errors, Rotation Points), Attacking (Attack Attempts, Kills, Attack Errors), Serve Receiving (Service Reception, Service Reception Error), Blocking (Total Blocks, Block Solos, Block Assists, Block Errors), Ball Handling (Ball Handling Attempts, Assists, Ball Handling Errors), and Digging (Digs, Digging Errors).
3.  The system automatically calculates derivative stats like Aces Per Game, Hitting Percentage, Kill Percentage, etc., based on entered raw data.
4.  Stat entry can be performed per set or per game.
5.  Data entered offline during games is cached locally and can be manually synchronized to the server upon re-establishing connectivity.
6.  Coaches can quickly select players and enter stats for multiple players during a game.

**Tasks / Subtasks**
- [ ] **Task 1: Stat Entry UI (AC: #1, #2, #4, #6)**
    - [ ] Design the interface for entering game-day statistics.
    - [ ] Implement the React component for the stat entry view.
- [ ] **Task 2: Backend for Stat Entry (AC: #1, #2, #3, #4, #6)**
    - [ ] Create API endpoints for submitting and updating game-day statistics.
    - [ ] Implement the business logic for calculating derivative stats.
- [ ] **Task 3: Offline Data Caching (AC: #5)**
    - [ ] Implement local caching of stat data in the browser.
    - [ ] Implement a manual synchronization mechanism to push cached data to the server.
- [ ] **Task 4: Database Schema for Stats (AC: #2)**
    - [ ] Design and create the necessary database tables for storing game-day statistics.

**Dev Notes**
*   **Comprehensive Stat Support**: The system needs to support a wide range of volleyball statistics.
*   **Real-time Calculations**: Derivative stats should be calculated in real-time as raw data is entered.
*   **Offline First**: The offline capability is a key feature.

**Testing**
*   Unit tests for the new API endpoints.
*   Component tests for the stat entry view.
*   Thorough testing of the derivative stat calculations.
*   Thorough testing of the offline caching and synchronization functionality.

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
