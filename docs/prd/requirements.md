# Requirements

Draft the list of functional and non functional requirements under the two child sections

### Functional

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

### Non Functional

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
