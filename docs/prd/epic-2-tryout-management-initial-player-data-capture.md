# Epic 2: Tryout Management & Initial Player Data Capture

**Epic Goal**: Implement the full tryout setup process, player registration, in-tryout assessment tools, and the ability to capture initial player data, supporting multi-team tryouts with eligibility rules and efficient coach assessment.

### Story 2.1: Tryout Event Configuration

**As a** Coach,
**I want** to set up tryout events for single or multiple teams,
**so that** I can manage the tryout process and define team eligibility.

**Acceptance Criteria**
1.  **1:** Coaches can create new tryout events, specifying date, time, and location.
2.  **2:** Coaches can define multiple teams for a single tryout event (e.g., Varsity, JV, specific club tiers).
3.  **3:** Coaches can set eligibility rules for each defined team based on criteria such as age and grade level.
4.  **4:** The system enforces eligibility rules, preventing players from being considered for teams they don't qualify for.
5.  **5:** Coaches can add general tryout information (e.g., instructions, expectations) for players/parents to view.

### Story 2.2: Player Tryout Registration & Profile Creation

**As a** new Player or Parent,
**I want** to register for tryouts and create a basic player profile,
**so that** coaches have my preliminary information for assessment.

**Acceptance Criteria**
1.  **1:** Players or their Parents can register for a specific tryout event.
2.  **2:** During registration, basic player profile information can be captured (e.g., full name, date of birth, grade level, contact information).
3.  **3:** A unique tryout number is automatically assigned to each registered player.
4.  **4:** A profile photo can be optionally uploaded for player identification.
5.  **5:** Registered players' basic profiles are created in the system, associated with the tryout.

### Story 2.3: In-Tryout Assessment Data Entry

**As a** Coach or Assistant Coach,
**I want** to quickly record and adjust player assessment data during tryouts,
**so that** I have real-time evaluation insights and can make informed decisions.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can access a dedicated interface for entering assessments for players during active tryouts.
2.  **2:** The interface allows for quick input and adjustment of scores/ranks for individual skills: serving, passing, hitting, setting, and blocking.
3.  **3:** Coaches can quickly find players by their tryout number or name within the assessment interface.
4.  **4:** Coaches can view a player's profile photo while assessing for easier identification.
5.  **5:** Data entered offline during tryouts is cached locally and can be manually synchronized to the server upon re-establishing connectivity.

### Story 2.4: Player Position and Role Flagging

**As a** Coach or Assistant Coach,
**I want** to flag a player's potential position(s) or role(s) during tryouts,
**so that** I can track potential team fit and strategic considerations early.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can assign one or more potential positions (e.g., Setter, Hitter, Libero) to a player during the tryout assessment phase.
2.  **2:** Coaches and Assistant Coaches can assign one or more potential roles (e.g., 5-1 Setter, 6-2 Hitter) to a player during the tryout assessment phase.
3.  **3:** These flags are visible when reviewing player assessment data.
