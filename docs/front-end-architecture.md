# Volleyball Coaching Application Frontend Architecture

## Template and Framework Selection

This is a Greenfield project that will be built from scratch using **React** as the primary frontend framework. A monorepo structure will be used to simplify development and shared code management.

## Frontend Tech Stack

The following technologies and tools will be used for the frontend, as defined in the architecture document:

| Category | Technology | Version | Purpose | Rationale |
| :--- | :--- | :--- | :--- | :--- |
| **Frontend Framework** | React | 18.2.0 | Frontend application UI | Industry standard, robust ecosystem, high performance, aligns with modern web practices. |
| **API Style** | REST | N/A | Communication between frontend and backend | Standard, well-understood, and highly compatible with both React and PHP. |
| **State Management** | React Context API | N/A | Centralized state management for the application | Built-in to React, suitable for MVP scale, no extra library needed. |
| **Styling** | CSS Modules | N/A | Component-scoped styling | Prevents style conflicts and keeps CSS isolated to each component. |
| **Testing** | Jest & React Testing Library | N/A | Unit and integration testing | Industry-standard tools for testing React applications. |

## Project Structure

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

## Component Standards

This section outlines the standards for creating React components to ensure consistency and maintainability.

  * **Component Template**: A minimal but complete component template will be defined to include React imports, functional component definition, and styling imports.
  * **Naming Conventions**: Components will use **PascalCase** for file and component names (e.g., `PlayerProfile.jsx`).
  * **Component Responsibility**: Components should have a single responsibility. We will aim for a clear separation between presentational components (how things look) and container components (how things work).

## State Management

The **React Context API** will be used for state management. This will allow us to manage application state without introducing an external library, which is ideal for a lean MVP.

  * **Store Structure**: The state will be organized into logical contexts (e.g., an `AuthContext` for user session, a `TeamContext` for team-specific data).
  * **State Management Patterns**: We will use a `Provider` pattern to make state available to child components, and `useContext` to consume it.

## API Integration

A dedicated **API service layer** will handle all communication between the React frontend and the PHP API backend.

  * **Service Template**: A standardized template will be used for API service files, centralizing API calls, handling authentication headers, and managing error responses.
  * **API Client Configuration**: An HTTP client (e.g., `axios` or the native `fetch` API) will be configured to handle API requests, including token management via cookies.

## Routing

The routing for the application will be handled by a dedicated library, such as `react-router-dom`.

  * **Route Configuration**: Routes will be defined in a central location, with clear path definitions and associated components.
  * **Protected Route Patterns**: A `Protected` component will be used to wrap routes that require a user to be authenticated, enforcing our RBAC model on the client side.

## Styling Guidelines

  * **Styling Approach**: **CSS Modules** will be used for component-scoped styling. This prevents class name collisions and keeps styles isolated, which is ideal for large applications.
  * **Global Styles**: A single global CSS file will be used for foundational styling, such as typography, color variables, and a reset.

## Testing Requirements

We will use **Jest and React Testing Library** for frontend testing.

  * **Component Tests**: Tests will cover component rendering, user interactions, and the display of props.
  * **Test Structure**: We will follow the Arrange-Act-Assert pattern.

## Frontend Developer Standards

  * **Critical Coding Rules**:
      * **State Updates**: Never mutate state directly; always use the state management patterns defined.
      * **API Calls**: All API calls must go through the dedicated API service layer, not directly from components.
      * **Code Sharing**: Reusable logic and types should be placed in the `packages/shared` directory.
      * **Accessibility**: Components must be built with accessibility in mind, adhering to the WCAG AA standard.
