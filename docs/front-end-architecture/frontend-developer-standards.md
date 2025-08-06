# Frontend Developer Standards

  * **Critical Coding Rules**:
      * **State Updates**: Never mutate state directly; always use the state management patterns defined.
      * **API Calls**: All API calls must go through the dedicated API service layer, not directly from components.
      * **Code Sharing**: Reusable logic and types should be placed in the `packages/shared` directory.
      * **Accessibility**: Components must be built with accessibility in mind, adhering to the WCAG AA standard.
