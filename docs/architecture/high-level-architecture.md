# High Level Architecture

### Technical Summary

The system will be built as a single, unified Monolith application, where the Apache web server serves a modern React frontend. The React application will communicate with a PHP API backend, which will handle business logic and interact with an SQLite database file. This architecture prioritizes a low-cost initial implementation while establishing a clear separation of concerns to enable future scaling and expansion.

### Architecture Diagram

```mermaid
graph TD
    A[User] -->|HTTPS| B[Apache Web Server]
    B -->|Serves HTML, CSS, JS| C[React Frontend App]
    C -->|API Calls| D[PHP Backend API]
    D -->|SQL Queries| E[SQLite Database File]
    style B fill:#f9f,stroke:#333,stroke-width:2px
    style C fill:#ccf,stroke:#333,stroke-width:2px
    style D fill:#c9c,stroke:#333,stroke-width:2px
    style E fill:#9cf,stroke:#333,stroke-width:2px
```

-----
