# Volleyball Coaching Application Product Requirements Document (PRD)

## Goals and Background Context

Ask if Project Brief document is available. If NO Project Brief exists, STRONGLY recommend creating one first using project-brief-tmpl (it provides essential foundation: problem statement, target users, success metrics, MVP scope, constraints). If user insists on PRD without brief, gather this information during Goals section. If Project Brief exists, review and use it to populate Goals (bullet list of desired outcomes) and Background Context (1-2 paragraphs on what this solves and why) so we can determine what is and is not in scope for PRD mvp. Either way this is critical to determine the requirements. Include Change Log table.

#### Goals

* **Reduce time spent on manual tryout data compilation and team selection by 30% within the first season of use.**
* **Increase coach-to-parent communication consistency, evidenced by a 25% reduction in individual parent queries about schedules and logistics, by the end of the upcoming season.**
* **Achieve 90% centralization of all player assessment data, rosters, and schedules within the application by the start of the next pre-season period.**
* **Ensure 80% of assistant coaches actively use the collaboration features (e.g., shared player assessments, lineup planning) for at least one team by the mid-point of the season.**
* **Implement features that lead to a 15% increase in positive player/parent feedback regarding team transparency and communication by the end of the first full season.**

#### Background Context

Coaching a volleyball team involves a multifaceted array of tasks that often lead to disparate data sources, manual processes, and fragmented communication channels. This application aims to alleviate these problems by providing a centralized, full-stack platform that streamlines operations, enhances communication, and offers tools for data-driven decision-making, ultimately fostering a safe, positive, fun, and competitive environment for players.

#### Change Log

| Date | Version | Description | Author |
| :--- | :------ | :---------- | :----- |
| 2025-07-21 | 1.0 | Initial PRD Draft | John (PM) |
| 2025-07-29 | 1.1 | Refined Requirements based on elicitation (stats, offline, usability, testing, critical challenge discussions). | John (PM) |

## Requirements

Draft the list of functional and non functional requirements under the two child sections

#### Functional

1.  **FR1: User Authentication & Authorization**: The system shall allow different user roles (Coach, Assistant Coach, Player, Parent) to securely log in using username/password authentication and access features based on their assigned permissions.
2.  **FR2: Player Profile Management**: Coaches shall be able to create, view, and update player profiles, including basic information, profile photos, and tryout numbers.
3.  **FR3: Tryout Setup & Management**: Coaches shall be able to set up tryout events, including defining eligibility rules for multiple teams (e.g., Varsity, JV, tiered club teams) based on age and grade level.
4.  **FR4: Player Tryout Registration**: Players shall be able to register for tryouts through the application.
5.  **FR5: In-Tryout Player Assessment**: Coaches and Assistant Coaches shall be able to quickly record and adjust player assessments (serving, passing, hitting, setting, blocking scores/ranks) in real-time during tryouts.
6.  **FR6: Player Comparison & Grouping for Selection**: Coaches shall be able to compare players side-by-side and group them based on assessment data to aid in team selection.
7.  **FR7: Team Roster Creation & Management**: Coaches shall be able to select players for a team, transition them into an official roster, and manage roster changes (injuries, new players, players leaving) throughout the season, including adding explanatory notes for events.
8.  **FR8: Eligibility Rule Enforcement**: The system shall automatically enforce eligibility rules during tiered team selection (e.g., Varsity picks first, then JV picks from remaining, respecting age/grade restrictions).
9.  **FR9: Historical Tryout Data Access**: Coaches shall be able to access and review historical tryout data for returning players across seasons.
10. **FR10: Match Schedule Management**: Coaches shall be able to create, view, and update game and practice schedules, including details like time, location, and event type.
11. **FR11: Lineup & Rotation Setting**: Coaches shall be able to set rotations (e.g., 5-1 vs. 6-2) and create lineups for matches.
12. **FR12: Data-Informed Lineup Assistance**: The system shall display key player data (e.g., stats, positions, assessments) side-by-side during lineup creation to assist coaches in decision-making.
13. **FR13: Team Roster Display**: Players and parents shall be able to view the team roster.
14. **FR14: Team Schedule Display**: All relevant stakeholders (coaches, players, parents) shall be able to view team schedules.
15. **FR15: Player Availability Tracking**: Players or Parents shall be able to signal their unavailability for practices or games, providing reasons. The system shall assume players are available unless explicitly marked otherwise.
16. **FR16: Basic Player Stat Tracking**: The system shall allow for capture, storage, and display of key player statistics, including General (Sets Played), Serving (Service Attempts, Aces, Service Errors, Rotation Points), Attacking (Attack Attempts, Kills, Attack Errors), Serve Receiving (Service Reception, Service Reception Error), Blocking (Total Blocks, Block Solos, Block Assists, Block Errors), Ball Handling (Ball Handling Attempts, Assists, Ball Handling Errors), and Digging (Digs, Digging Errors), as well as automatically calculated derivative stats (e.g., percentages, per game/set averages).
17. **FR17: Data Export**: The system shall provide capabilities to export rosters, match lineups, and statistics in common formats.
18. **FR18: Coach Collaboration**: Assistant coaches shall be able to collaborate on player assessments and lineup planning.
19. **FR19: Coaching Vision & Guidelines Display**: Parents shall be able to view the coaching vision, mission, guidelines, rules, and contract information related to being a team member. (Coaches' ability to manage this content will be addressed in future iterations).
20. **FR20: Player Progress Tracking**: Players shall be able to view graphical trends of their individual statistics over time.
21. **FR21: Training & Skill Resources Access**: Players shall have access to a curated list of external training drills and instructional content through links to external videos (e.g., YouTube) or PDFs. (Coaches' ability to manage this content will be addressed in future iterations).
22. **FR22: Player Collaboration & Morale**: Players shall have features for basic direct and group messaging with teammates and coaches within the application.
23. **FR23: Learning & Strategy Modules**: Players shall be able to access static images or PDFs of diagrams for understanding rotations, plays, and strategies. (Coaches' ability to manage this content will be addressed in future iterations).

#### Non Functional

1.  **NFR1: Performance**: The application shall provide quick response times for all critical operations (e.g., loading tryout assessments, updating player stats, generating lineups).
2.  **NFR2: Scalability**: The application shall be able to accommodate a growing number of teams, players, and historical data without significant degradation in performance.
3.  **NFR3: Security**: User data, especially player information and assessments, shall be securely stored and accessed only by authorized personnel based on their roles.
4.  **NFR4: Usability & Adoption**: The application shall be highly intuitive and easy to use for coaches, players, and parents, minimizing the learning curve for users transitioning from manual (pen and paper) methods to digital workflows.
5.  **NFR5: Maintainability**: The codebase shall be structured to allow for easy updates, bug fixes, and future feature additions leveraging the PHP/PostgreSQL stack.
6.  **NFR6: Cost-Effectiveness**: The application shall adhere to a cost-effective hosting model, utilizing Apache with PHP and PostgreSQL as primary technologies, suitable for BlueHost hosting.
7.  **NFR7: Data Integrity**: All player, team, and schedule data shall be consistent, accurate, and protected against corruption.
8.  **NFR8: Accessibility**: Key features of the application shall be accessible to users with common disabilities where practical for a web-based interface.
9.  **NFR9: Reliability & Testability**: The application shall be available and operational during critical periods with minimal downtime. It shall be built with testability in mind, including support for comprehensive testing, simulation of edge cases with mock data, and clear test case scenarios to ensure robust behavior.
10. **NFR10: Offline Capability**: The application shall allow coaches to view existing data offline and capture *new* data (like assessments) locally. This locally cached data will then require manual initiation of synchronization by the user upon re-establishing connectivity.

## User Interface Design Goals

Capture high-level UI/UX vision to guide Design Architect and to inform story creation.

#### Overall UX Vision

The application should provide a seamless, intuitive, and efficient experience for coaches, players, and parents. It needs to simplify complex team management tasks, making the digital transition from manual methods effortless. The design should foster engagement and contribute to a positive and competitive team environment.

#### Key Interaction Paradigms

* **Data Entry Efficiency**: Prioritize quick and accurate data input, especially for tryout assessments and stat tracking, possibly with optimized forms or bulk entry options.
* **Clear Information Hierarchy**: Ensure critical information (schedules, rosters, player availability, key stats) is easily discoverable and digestible at a glance.
* **Collaborative Workflows**: Support intuitive interaction patterns for shared tasks, such as co-assessing players or jointly setting lineups.
* **Feedback & Confirmation**: Provide clear, immediate feedback for user actions and confirmations for critical decisions (e.g., team selection, roster changes).

#### Core Screens and Views

* **Login/User Dashboard**: Personalized dashboard providing quick access to relevant team/player information based on role (coach, player, parent).
* **Tryout Management Screen**: Interface for setting up tryouts, registering players, and entering/viewing real-time assessments.
* **Team Selection & Roster Screens**: Tools for comparing players, making selections, and managing current and historical rosters.
* **Schedule View**: Calendar/list view for practices, games, and events, with details.
* **Match Management/Lineup Builder**: Interface for creating game lineups and rotations.
* **Player Profile/Stat View**: Individual player pages displaying stats and progress.
* **Communication Hub**: Interface for in-app messaging.

#### Accessibility: None|WCAG AA|WCAG AAA|Custom Requirements

* **Accessibility**: WCAG AA (Web Content Accessibility Guidelines Level AA)

#### Branding

* **Branding**: A clean, modern, and sports-inspired aesthetic that conveys professionalism, efficiency, and a positive team spirit. Colors and typography should be easily readable and reflect dynamism.

#### Target Device and Platforms: Web Responsive|Mobile Only|Desktop Only|Cross-Platform

* **Target Device and Platforms**: Web Responsive (optimized for desktop, tablet, and mobile browsers).

## Technical Assumptions

Gather technical decisions that will guide the Architect. These are initial thoughts, not final decisions, but become constraints for the Architect.

#### Repository Structure: {Monorepo|Polyrepo|Multi-repo}

* **Repository Structure**: Monorepo (A single repository containing both the PHP API backend and the React frontend, facilitating shared code and streamlined development).

#### Service Architecture

* **Service Architecture**: Monolith (A single, unified application for backend logic, which is fine for now, aligning with initial cost-effectiveness goals).

#### Testing Requirements

* **Testing Requirements**: Unit + Integration (focused on ensuring individual components work and how they interact within the single application).

#### Additional Technical Assumptions and Requests

* **Primary Backend Language**: PHP (API-focused).
* **Primary Database**: PostgreSQL.
* **Web Server**: Apache.
* **Hosting Environment**: BlueHost (implying shared hosting environment constraints and initial cost-effectiveness focus).
* **Front-end Framework**: Modern React app.
* **Hosting Approach**: The React frontend build artifacts will be served directly by the **Apache web server**, ensuring a lean and efficient client tier separate from the PHP server-side application.
* **Key Artifacts to Capture (using Mermaid)**:
    * Entity-Relationship Diagrams (ERDs)
    * Network Flow Diagrams
    * UI/UX Workflow Diagrams
    * Any other relevant architectural diagrams.
* **Future-Proofing for Scalability**: The initial framework approach should prioritize low cost for the MVP/Proof of Concept, but with a strong emphasis on reusability of concepts and technical foundations to support future scaling and expansion.

## Epic List

Present a high-level list of all epics for user approval. Each epic should have a title and a short (1 sentence) goal statement. Epics MUST be logically sequential following agile best practices.

* **Epic 1: Foundation & User Management**: Establish the core project infrastructure, set up user authentication and authorization, and implement basic user profile management for coaches, assistant coaches, and players.
* **Epic 2: Tryout Management & Initial Player Data Capture**: Implement the full tryout setup process, player registration, in-tryout assessment tools, and the ability to capture initial player data, supporting multi-team tryouts with eligibility rules and efficient coach assessment.
* **Epic 3: Team Selection & Roster Management**: Develop the functionalities for selecting players for teams, creating and managing official rosters (including multi-team/tiered selection with eligibility rules), and handling roster changes throughout the season.
* **Epic 4: Schedule & Match Management**: Implement comprehensive game and practice schedule management, along with tools for setting rotations and creating match lineups, including basic data-informed assistance.
* **Epic 5: Basic Stat Tracking & Player Information Access**: Implement the capture, storage, and display of key player statistics, and provide core functionalities for players and parents to view rosters, schedules, and player stats.
* **Epic 6: Communication & Player Resources**: Develop basic in-app messaging for team communication and provide players with access to external training resources and static strategy diagrams, fostering a connected and developmental environment.

## Epic 1: Foundation & User Management

**Epic Goal**: Establish the core project infrastructure, set up user authentication and authorization, and implement basic user profile management for coaches, assistant coaches, and players. This epic delivers the foundational system for all subsequent features, ensuring secure access and basic user data management.

#### Story 1.1: System Setup and Core Authentication

**As a** system administrator,
**I want** the foundational project infrastructure to be set up securely,
**so that** users can securely access the application and I can manage their roles.

**Acceptance Criteria**
1.  **1:** The project repository is initialized with a monorepo structure, including separate directories for the PHP API backend and React frontend.
2.  **2:** The Apache web server is configured to serve the React frontend build artifacts.
3.  **3:** A PostgreSQL database is set up and accessible by the backend.
4.  **4:** Basic username/password authentication (login, logout, password hashing) is implemented for all user roles (Coach, Assistant Coach, Player, Parent).
5.  **5:** User roles (Coach, Assistant Coach, Player, Parent) are defined with distinct permissions for accessing system functionalities.
6.  **6:** Role-based access controls are implemented, ensuring each role has the defined access permissions:
    * **Coach**: Full access to manage their team, including assistant coaches, and viewing all player data.
    * **Assistant Coach**: Full access to manage their team (except the head coach), and viewing all player data.
    * **Player**: Can view their own profile, their stats and team stats, team schedule, team roster, communication features, and training resources. Cannot edit their own profile.
    * **Parent**: Can view the team schedule, team roster, general team communication, and coaching vision. Cannot view stats. Can update their child's availability.
7.  **7:** A health-check endpoint or a simple canary page is deployed and accessible.

#### Story 1.2: User Profile Creation and Management

**As a** Coach,
**I want** to create and manage user profiles for Assistant Coaches, Players, and Parents,
**so that** they can access the application and have their basic information stored.

**Acceptance Criteria**
1.  **1:** Coaches can create new user accounts for Assistant Coaches, Players, and Parents, assigning their initial roles.
2.  **2:** Coaches can view and edit basic user profile information (e.g., name, contact details).
3.  **3:** Users (including Players and Parents) can view their own basic profile information, and access team-related data based on their role's defined permissions.
4.  **4:** User accounts can be enabled/disabled.

## Epic 2: Tryout Management & Initial Player Data Capture

**Epic Goal**: Implement the full tryout setup process, player registration, in-tryout assessment tools, and the ability to capture initial player data, supporting multi-team tryouts with eligibility rules and efficient coach assessment.

#### Story 2.1: Tryout Event Configuration

**As a** Coach,
**I want** to set up tryout events for single or multiple teams,
**so that** I can manage the tryout process and define team eligibility.

**Acceptance Criteria**
1.  **1:** Coaches can create new tryout events, specifying date, time, and location.
2.  **2:** Coaches can define multiple teams for a single tryout event (e.g., Varsity, JV, specific club tiers).
3.  **3:** Coaches can set eligibility rules for each defined team based on criteria such as age and grade level.
4.  **4:** The system enforces eligibility rules, preventing players from being considered for teams they don't qualify for.
5.  **5:** Coaches can add general tryout information (e.g., instructions, expectations) for players/parents to view.

#### Story 2.2: Player Tryout Registration & Profile Creation

**As a** new Player or Parent,
**I want** to register for tryouts and create a basic player profile,
**so that** coaches have my preliminary information for assessment.

**Acceptance Criteria**
1.  **1:** Players or their Parents can register for a specific tryout event.
2.  **2:** During registration, basic player profile information can be captured (e.g., full name, date of birth, grade level, contact information).
3.  **3:** A unique tryout number is automatically assigned to each registered player.
4.  **4:** A profile photo can be optionally uploaded for player identification.
5.  **5:** Registered players' basic profiles are created in the system, associated with the tryout.

#### Story 2.3: In-Tryout Assessment Data Entry

**As a** Coach or Assistant Coach,
**I want** to quickly record and adjust player assessment data during tryouts,
**so that** I have real-time evaluation insights and can make informed decisions.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can access a dedicated interface for entering assessments for players during active tryouts.
2.  **2:** The interface allows for quick input and adjustment of scores/ranks for individual skills: serving, passing, hitting, setting, and blocking.
3.  **3:** Coaches can quickly find players by their tryout number or name within the assessment interface.
4.  **4:** Coaches can view a player's profile photo while assessing for easier identification.
5.  **5:** Data entered offline during tryouts is cached locally and can be manually synchronized to the server upon re-establishing connectivity.

#### Story 2.4: Player Position and Role Flagging

**As a** Coach or Assistant Coach,
**I want** to flag a player's potential position(s) or role(s) during tryouts,
**so that** I can track potential team fit and strategic considerations early.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can assign one or more potential positions (e.g., Setter, Hitter, Libero) to a player during the tryout assessment phase.
2.  **2:** Coaches and Assistant Coaches can assign one or more potential roles (e.g., 5-1 Setter, 6-2 Hitter) to a player during the tryout assessment phase.
3.  **3:** These flags are visible when reviewing player assessment data.

## Epic 3: Team Selection & Roster Management

**Epic Goal**: Develop the functionalities for selecting players for teams, creating and managing official rosters (including multi-team/tiered selection with eligibility rules), and handling roster changes throughout the season, ensuring historical data is maintained.

#### Story 3.1: Player Comparison and Grouping for Selection

**As a** Coach or Assistant Coach,
**I want** to compare players side-by-side and group them based on their tryout assessment data,
**so that** I can make informed decisions during team selection.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can access a comparison view of players from a specific tryout event.
2.  **2:** The comparison view displays key assessment scores (serving, passing, hitting, setting, blocking), potential positions/roles, and basic player profile information (including photo).
3.  **3:** Coaches can group players (e.g., by skill level, position, or potential team) to facilitate selection discussions.
4.  **4:** The system allows for quick filtering and sorting of players based on assessment scores, positions, age, or grade level.

#### Story 3.2: Team Roster Creation & Tiered Selection Enforcement

**As a** Coach,
**I want** to select players for specific teams from the tryout pool and transition them to an official roster,
**so that** the team composition is finalized according to eligibility rules and selection tiers.

**Acceptance Criteria**
1.  **1:** Coaches can select players from the tryout pool to assign them to a specific team (e.g., Varsity, JV).
2.  **2:** The system automatically validates player eligibility (age, grade) for the selected team based on configured rules, preventing invalid assignments.
3.  **3:** For multi-team tryouts with tiered selection (e.g., Varsity picks first, then JV picks from remaining, respecting age/grade restrictions), the system guides the coach through the selection order.
4.  **4:** Coaches can define and apply a maximum number of players per team.
5.  **5:** Once selections are finalized, players are officially moved to the team's active roster for the current season.

#### Story 3.3: In-Season Roster Adjustments

**As a** Coach,
**I want** to manage roster changes during a season,
**so that** the team information remains accurate despite injuries, new players, or players leaving.

**Acceptance Criteria**
1.  **1:** Coaches can mark a player as injured, noting the injury details and expected return date.
2.  **2:** Coaches can add new players to the roster mid-season.
3.  **3:** Coaches can remove players from the roster, noting the reason for their departure.
4.  **4:** All roster changes include a timestamp and allow for an optional explanatory note.
5.  **5:** The system maintains a historical log of roster changes for audit purposes.

#### Story 3.4: Multi-Season Roster & Historical Data Access

**As a** Coach,
**I want** to maintain and access historical tryout and roster data across multiple seasons,
**so that** I can track player development and inform future decisions.

**Acceptance Criteria**
1.  **1:** The system automatically archives tryout data and season rosters for historical reference upon season completion.
2.  **2:** Coaches can access past season rosters and associated player data (e.g., historical tryout assessments, team assignment).
3.  **3:** Coaches can access a player's historical tryout data if they return for subsequent seasons.
4.  **4:** Historical data is clearly separated from current season data.

## Epic 4: Schedule & Match Management

**Epic Goal**: Implement comprehensive game and practice schedule management, along with tools for setting rotations and creating match lineups, including basic data-informed assistance.

#### Story 4.1: Game and Practice Schedule Management

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

#### Story 4.2: Player Availability Tracking

**As a** Player or Parent,
**I want** to communicate my (or my child's) availability for scheduled practices and games,
**so that** coaches have up-to-date information for planning.

**Acceptance Criteria**
1.  **1:** Players or Parents can view upcoming scheduled events.
2.  **2:** For each event, players or parents can explicitly mark themselves (or their child) as "unavailable".
3.  **3:** When marking "unavailable", a mandatory reason/note field is provided.
4.  **4:** The system defaults to assuming a player is "available" for all scheduled events unless explicitly marked otherwise.
5.  **5:** Coaches can view the availability status of all players for each scheduled event.

#### Story 4.3: Match Lineup and Rotation Setting

**As a** Coach or Assistant Coach,
**I want** to set strategic rotations (e.g., 5-1 vs. 6-2) and create specific match lineups,
**so that** I can effectively plan for upcoming games.

**Acceptance Criteria**
1.  **1:** Coaches and Assistant Coaches can access a dedicated interface for creating and managing match lineups.
2.  **2:** The interface allows for selection of a rotation type (e.g., 5-1, 6-2).
3.  **3:** Coaches can drag-and-drop or select players into specific lineup positions for each rotation.
4.  **4:** The system displays player names and positions clearly within the lineup configuration.
5.  **5:** Lineups can be saved and retrieved for specific matches.

#### Story 4.4: Data-Informed Lineup Assistance

**As a** Coach,
**I want** to see key player data (e.g., stats, positions, assessments) while building lineups,
**so that** I can make data-informed decisions for match strategy.

**Acceptance Criteria**
1.  **1:** When building a lineup (Story 4.3), the system displays relevant player data from their profiles (e.g., primary/secondary positions, historical assessments like serving/hitting scores).
2.  **2:** The system displays key player statistics (from Epic 5) relevant to lineup decisions, presented clearly alongside player names.
3.  **3:** Coaches can quickly toggle visibility of different data points to focus on specific metrics during lineup selection.
4.  **4:** The system allows for side-by-side comparison of selected players' data within the lineup interface.

## Epic 5: Basic Stat Tracking & Player Information Access

**Epic Goal**: Implement the capture, storage, and display of key player statistics, and provide core functionalities for players and parents to view rosters, schedules, and player stats, ensuring data accuracy and clarity.

#### Story 5.1: Game-Day Stat Entry

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

#### Story 5.2: Player Profile & Stat View (Players)

**As a** Player,
**I want** to view my individual profile, performance statistics, and trends over time,
**so that** I can track my progress and identify areas for improvement.

**Acceptance Criteria**
1.  **1:** Players can access their own dedicated profile page.
2.  **2:** The profile page displays their basic information (name, photo, team, position).
3.  **3:** The page displays their individual game-day statistics (as defined in Story 5.1).
4.  **4:** The system presents graphical trends of a player's key statistics over time (e.g., season-long trends for kills, aces, digs).
5.  **5:** Players cannot edit their own profile information or stats directly.

#### Story 5.3: Team Roster & Schedule Display (All Stakeholders)

**As a** Player or Parent,
**I want** to easily view the team roster and schedule,
**so that** I am always informed about who is on the team and when our events are.

**Acceptance Criteria**
1.  **1:** Players and Parents can view the current team roster, including player names and assigned team.
2.  **2:** The team roster view allows for filtering/sorting (e.g., by jersey number, position, if available).
3.  **3:** Players and Parents can view the full team schedule (games, practices, events) in a clear, accessible format.
4.  **4:** Schedule entries display date, time, location, and event type.
5.  **5:** Communication from coaches (e.g., coaching vision, team guidelines) is accessible for parents.

#### Story 5.4: Data Export Capabilities

**As a** Coach,
**I want** to export various team and player data,
**so that** I can share information with external parties or use it for offline analysis.

**Acceptance Criteria**
1.  **1:** Coaches can export the current team roster in a readable format (e.g., CSV, PDF).
2.  **2:** Coaches can export match lineups for specific games in a readable format.
3.  **3:** Coaches can export individual and team statistics (as defined in Story 5.1) for a selected period (e.g., single game, season-to-date).
4.  **4:** Exported data maintains clear formatting and includes all relevant columns.

## Epic 6: Communication & Player Resources

**Epic Goal**: Develop basic in-app messaging for team communication and provide players with access to external training resources and static strategy diagrams, fostering a connected and developmental environment.

#### Story 6.1: Basic In-App Messaging

**As a** Coach, Assistant Coach, or Player,
**I want** to send and receive direct and group messages within the application,
**so that** team communication is centralized and efficient.

**Acceptance Criteria**
1.  **1:** Users can send direct messages to other individual users (Coach to Player, Player to Player, Coach to Assistant Coach, etc.).
2.  **2:** Users can send group messages to defined groups (e.g., entire team, all coaches, specific position groups).
3.  **3:** Messages are stored and displayed in a chronological conversation view.
4.  **4:** Coaches can initiate messages with players, assistant coaches, and parents.
5.  **5:** Players can initiate messages with coaches and teammates.
6.  **6:** The messaging interface is intuitive and easy to use.

#### Story 6.2: External Training Resource Access

**As a** Player,
**I want** to access a curated list of external training drills and instructional content,
**so that** I can continue developing my skills outside of structured practices.

**Acceptance Criteria**
1.  **1:** Players can view a list of training resources provided by coaches.
2.  **2:** Each resource entry includes a title, description, and an external link (e.g., to a YouTube video, PDF, or external article).
3.  **3:** Coaches can add, edit, and remove external training resource links.
4.  **4:** Resources can be categorized (e.g., Serving Drills, Hitting Techniques, Conditioning) for easier navigation.

#### Story 6.3: Static Strategy Diagram Access

**As a** Player,
**I want** to view static diagrams of team strategies and rotations,
**so that** I can better understand game plans and my role within them.

**Acceptance Criteria**
1.  **1:** Players can access a section dedicated to team strategy and rotation diagrams.
2.  **2:** Diagrams are displayed as static images or embedded PDFs (not interactive).
3.  **3:** Each diagram includes a title and a brief descriptive text provided by the coach.
4.  **4:** Coaches can upload, manage, and categorize static strategy diagrams/documents.
