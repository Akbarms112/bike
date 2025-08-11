# Bike Wash Booking System - React + TypeScript

This is a modern React + TypeScript frontend for the Bike Wash Booking System, designed to work with the existing PHP backend.

## Features

- **Modern React with TypeScript**: Type-safe components and better development experience
- **Responsive Design**: Mobile-first approach with responsive layouts
- **Authentication System**: User and admin login/signup functionality
- **Booking Management**: Complete booking flow with form validation
- **Admin Dashboard**: View and manage all bookings
- **Gallery**: Showcase services with image gallery
- **Context API**: Global state management for authentication

## Project Structure

```
src/
├── components/          # Reusable UI components
├── pages/              # Page components (routes)
├── context/            # React Context for state management
├── services/           # API service functions
├── types/              # TypeScript type definitions
├── App.tsx             # Main app component
└── main.tsx           # App entry point
```

## Setup Instructions

1. **Install Dependencies**
   ```bash
   cd bike-wash-app
   npm install
   ```

2. **Configure API Base URL**
   - Open `src/services/api.ts`
   - Update `API_BASE_URL` to match your PHP server URL
   - Default is set to `http://localhost`

3. **Start Development Server**
   ```bash
   npm run dev
   ```

4. **Build for Production**
   ```bash
   npm run build
   ```

## PHP Backend Integration

The React app communicates with your existing PHP files through HTTP requests:

- **Authentication**: `user_login.php`, `User_signup.php`, `Admine_login.php`
- **Bookings**: `find_shop.php`, `book.php`, `get_bookings.php`
- **Updates**: `update_status.php`, `update_pickup.php`

## Key Components

### Authentication
- `AuthContext`: Manages user authentication state
- `Login/Signup`: User authentication forms
- `AdminLogin`: Separate admin authentication

### Booking System
- `Dashboard`: Main booking form
- `AdminDashboard`: View all bookings (admin only)
- API integration with existing PHP endpoints

### UI Components
- `Navbar`: Responsive navigation with authentication state
- `Hero`: Landing page hero section
- `Services`: Service offerings display
- `Footer`: Site footer with contact information

## TypeScript Benefits

- **Type Safety**: Catch errors at compile time
- **Better IDE Support**: Autocomplete and refactoring
- **Self-Documenting Code**: Types serve as documentation
- **Easier Maintenance**: Refactoring with confidence

## Responsive Design

- Mobile-first CSS approach
- Flexible grid layouts
- Touch-friendly interface
- Optimized for all screen sizes

## State Management

Uses React Context API for:
- User authentication state
- Admin privileges
- Session persistence with localStorage

## API Integration

All PHP endpoints are wrapped in TypeScript functions with proper error handling and type safety.

## Development Notes

- The app maintains compatibility with your existing PHP backend
- No changes required to PHP files
- Session management works with both systems
- CORS may need to be configured on your PHP server for development