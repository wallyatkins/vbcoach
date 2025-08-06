# Project Structure

This structure is an extension of the monorepo from the `architecture.md`, providing a more detailed look into the frontend's directory layout.

```plaintext
volleyball-coaching-app/
├── apps/
│   └── web/                    # The React frontend application
│       ├── public/             # Static assets (HTML, images)
│       ├── src/                # React source code
│       │   ├── api/            # API service layer (data fetching logic)
│       │   ├── assets/         # Images, fonts, etc.
│       │   ├── components/     # Reusable UI components
│       │   ├── pages/          # Application pages/views
│       │   ├── state/          # State management logic
│       │   ├── styles/         # Global styles and themes
│       │   └── index.js        # React app entry point
│
├── packages/                   # Shared code and utilities
│   └── shared/                 # Code shared between the frontend and backend
│       └── types/              # TypeScript/PHP data type definitions
│
├── ...                         # Other project files from architecture.md
```
