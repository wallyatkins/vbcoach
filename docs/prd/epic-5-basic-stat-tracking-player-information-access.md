# Epic 5: Basic Stat Tracking & Player Information Access

**Epic Goal**: Implement the capture, storage, and display of key player statistics, and provide core functionalities for players and parents to view rosters, schedules, and player stats, ensuring data accuracy and clarity.

### Story 5.1: Game-Day Stat Entry

**As a** Coach or Assistant Coach,
**I want** to easily record specific game-day volleyball statistics for players,
**so that** I can track individual and team performance.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can access a dedicated interface for entering game-day statistics for players.
2.  **2:** The interface supports input for the following stat categories: General (Sets Played), Serving (Service Attempts, Aces, Service Errors, Rotation Points), Attacking (Attack Attempts, Kills, Attack Errors), Serve Receiving (Service Reception, Service Reception Error), Blocking (Total Blocks, Block Solos, Block Assists, Block Errors), Ball Handling (Ball Handling Attempts, Assists, Ball Handling Errors), and Digging (Digs, Digging Errors).
3.  **3:** The system automatically calculates derivative stats like Aces Per Game, Hitting Percentage, Kill Percentage, etc., based on entered raw data.
4.  **4:** Stat entry can be performed per set or per game.
5.  **5:** Data entered offline during games is cached locally and can be manually synchronized to the server upon re-establishing connectivity.
6.  **6:** Coaches can quickly select players and enter stats for multiple players during a game.

### Story 5.2: Player Profile & Stat View (Players)

**As a** Player,
**I want** to view my individual profile, performance statistics, and trends over time,
**so that** I can track my progress and identify areas for improvement.

**Acceptance Criteria**
1.  **1:** Players can access their own dedicated profile page.
2.  **2:** The profile page displays their basic information (name, photo, team, position).
3.  **3:** The page displays their individual game-day statistics (as defined in Story 5.1).
4.  **4:** The system presents graphical trends of a player's key statistics over time (e.g., season-long trends for kills, aces, digs).
5.  **5:** Players cannot edit their own profile information or stats directly.

### Story 5.3: Team Roster & Schedule Display (All Stakeholders)

**As a** Player or Parent,
**I want** to easily view the team roster and schedule,
**so that** I am always informed about who is on the team and when our events are.

**Acceptance Criteria**
1.  **1:** Players and Parents can view the current team roster, including player names and assigned team.
2.  **2:** The team roster view allows for filtering/sorting (e.g., by jersey number, position, if available).
3.  **3:** Players and Parents can view the full team schedule (games, practices, events) in a clear, accessible format.
4.  **4:** Schedule entries display date, time, location, and event type.
5.  **5:** Communication from coaches (e.g., coaching vision, team guidelines) is accessible for parents.

### Story 5.4: Data Export Capabilities

**As a** Coach,
**I want** to export various team and player data,
**so that** I can share information with external parties or use it for offline analysis.

**Acceptance Criteria**
1.  **1:** Coaches can export the current team roster in a readable format (e.g., CSV, PDF).
2.  **2:** Coaches can export match lineups for specific games in a readable format.
3.  **3:** Coaches can export individual and team statistics (as defined in Story 5.1) for a selected period (e.g., single game, season-to-date).
4.  **4:** Exported data maintains clear formatting and includes all relevant columns.
