``` mermaid
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