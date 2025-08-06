# Technical Assumptions

Gather technical decisions that will guide the Architect. These are initial thoughts, not final decisions, but become constraints for the Architect.

### Repository Structure: {Monorepo|Polyrepo|Multi-repo}

* **Repository Structure**: Monorepo (A single repository containing both the PHP API backend and the React frontend, facilitating shared code and streamlined development).

### Service Architecture

* **Service Architecture**: Monolith (A single, unified application for backend logic, which is fine for now, aligning with initial cost-effectiveness goals).

### Testing Requirements

* **Testing Requirements**: Unit + Integration (focused on ensuring individual components work and how they interact within the single application).

### Additional Technical Assumptions and Requests

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
