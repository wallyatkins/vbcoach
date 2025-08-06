# Epic 3: Team Selection & Roster Management

**Epic Goal**: Develop the functionalities for selecting players for teams, creating and managing official rosters (including multi-team/tiered selection with eligibility rules), and handling roster changes throughout the season, ensuring historical data is maintained.

### Story 3.1: Player Comparison and Grouping for Selection

**As a** Coach or Assistant Coach,
**I want** to compare players side-by-side and group them based on their tryout assessment data,
**so that** I can make informed decisions during team selection.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can access a comparison view of players from a specific tryout event.
2.  **2:** The comparison view displays key assessment scores (serving, passing, hitting, setting, blocking), potential positions/roles, and basic player profile information (including photo).
3.  **3:** Coaches can group players (e.g., by skill level, position, or potential team) to facilitate selection discussions.
4.  **4:** The system allows for quick filtering and sorting of players based on assessment scores, positions, age, or grade level.

### Story 3.2: Team Roster Creation & Tiered Selection Enforcement

**As a** Coach,
**I want** to select players for specific teams from the tryout pool and transition them to an official roster,
**so that** the team composition is finalized according to eligibility rules and selection tiers.

**Acceptance Criteria**
1.  **1:** Coaches can select players from the tryout pool to assign them to a specific team (e.g., Varsity, JV).
2.  **2:** The system automatically validates player eligibility (age, grade) for the selected team based on configured rules, preventing invalid assignments.
3.  **3:** For multi-team tryouts with tiered selection (e.g., Varsity picks first, then JV picks from remaining, respecting age/grade restrictions), the system guides the coach through the selection order.
4.  **4:** Coaches can define and apply a maximum number of players per team.
5.  **5:** Once selections are finalized, players are officially moved to the team's active roster for the current season.

### Story 3.3: In-Season Roster Adjustments

**As a** Coach,
**I want** to manage roster changes during a season,
**so that** the team information remains accurate despite injuries, new players, or players leaving.

**Acceptance Criteria**
1.  **1:** Coaches can mark a player as injured, noting the injury details and expected return date.
2.  **2:** Coaches can add new players to the roster mid-season.
3.  **3:** Coaches can remove players from the roster, noting the reason for their departure.
4.  **4:** All roster changes include a timestamp and allow for an optional explanatory note.
5.  **5:** The system maintains a historical log of roster changes for audit purposes.

### Story 3.4: Multi-Season Roster & Historical Data Access

**As a** Coach,
**I want** to maintain and access historical tryout and roster data across multiple seasons,
**so that** I can track player development and inform future decisions.

**Acceptance Criteria**
1.  **1:** The system automatically archives tryout data and season rosters for historical reference upon season completion.
2.  **2:** Coaches can access past season rosters and associated player data (e.g., historical tryout assessments, team assignment).
3.  **3:** Coaches can access a player's historical tryout data if they return for subsequent seasons.
4.  **4:** Historical data is clearly separated from current season data.
