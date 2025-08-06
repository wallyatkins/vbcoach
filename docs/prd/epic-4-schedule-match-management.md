# Epic 4: Schedule & Match Management

**Epic Goal**: Implement comprehensive game and practice schedule management, along with tools for setting rotations and creating match lineups, including basic data-informed assistance.

### Story 4.1: Game and Practice Schedule Management

**As a** Coach or Assistant Coach,
**I want** to create, view, and update game and practice schedules,
**so that** all team stakeholders are informed about upcoming events.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can create new schedule entries for games, practices, or other team events.
2.  **2:** Each schedule entry includes event type (game, practice, other), date, time, location, and a description.
3.  **3:** Coaches can mark events as home or away games.
4.  **4:** Coaches can view and edit existing schedule entries.
5.  **5:** The schedule is presented in a clear, easy-to-read format (e.g., calendar or list view).
6.  **6:** The system allows for easy filtering of schedule by event type or team.

### Story 4.2: Player Availability Tracking

**As a** Player or Parent,
**I want** to communicate my (or my child's) availability for scheduled practices and games,
**so that** coaches have up-to-date information for planning.

**Acceptance Criteria**
1.  **1:** Players or Parents can view upcoming scheduled events.
2.  **2:** For each event, players or parents can explicitly mark themselves (or their child) as "unavailable".
3.  **3:** When marking "unavailable", a mandatory reason/note field is provided.
4.  **4:** The system defaults to assuming a player is "available" for all scheduled events unless explicitly marked otherwise.
5.  **5:** Coaches can view the availability status of all players for each scheduled event.

### Story 4.3: Match Lineup and Rotation Setting

**As a** Coach or Assistant Coach,
**I want** to set strategic rotations (e.g., 5-1 vs. 6-2) and create specific match lineups,
**so that** I can effectively plan for upcoming games.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can access a dedicated interface for creating and managing match lineups.
2.  **2:** The interface allows for selection of a rotation type (e.g., 5-1, 6-2).
3.  **3:** Coaches can drag-and-drop or select players into specific lineup positions for each rotation.
4.  **4:** The system displays player names and positions clearly within the lineup configuration.
5.  **5:** Lineups can be saved and retrieved for specific matches.

### Story 4.4: Data-Informed Lineup Assistance

**As a** Coach,
**I want** to see key player data (e.g., stats, positions, assessments) while building lineups,
**so that** I can make data-informed decisions for match strategy.

**Acceptance Criteria**
1.  **1:** When building a lineup (Story 4.3), the system displays relevant player data from their profiles (e.g., primary/secondary positions, historical assessments like serving/hitting scores).
2.  **2:** The system displays key player statistics (from Epic 5) relevant to lineup decisions, presented clearly alongside player names.
3.  **3:** Coaches can quickly toggle visibility of different data points to focus on specific metrics during lineup selection.
4.  **4:** The system allows for side-by-side comparison of selected players' data within the lineup interface.
