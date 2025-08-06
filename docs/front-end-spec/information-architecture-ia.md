# Information Architecture (IA)

### Site Map / Screen Inventory

The navigation architecture is hierarchical, with Organizations as the top-level container for managing teams and tryouts.

```mermaid
graph TD
    A[Dashboard] --> B(Organizations)
    A --> C(Schedule)
    
    B --> B1(Teams)
    B --> B2(Tryouts)
    
    B1 --> D(Team Roster)
    B1 --> E(Match Management)
    B1 --> F(Stat Tracking)
    B1 --> G(Communication)
    B1 --> H(Training Resources)

    B2 --> I(Player Registration)
    B2 --> J(Assessment)
    B2 --> K(Team Selection)

    D --> L[Player Profile]
    F --> L
    G --> L
    H --> L
```

### Navigation Structure

  * **Primary Navigation**: A dashboard and a top-level schedule view provide quick access to a consolidated view of events across all associated teams and organizations.
  * **Hierarchical Navigation**: Teams and Tryouts are nested under a parent Organization container, creating a logical, tiered navigation experience.
  * **Contextual Navigation**: Screens for Roster, Match Management, Stat Tracking, Communication, and Training Resources are all accessible within the context of a specific team.
