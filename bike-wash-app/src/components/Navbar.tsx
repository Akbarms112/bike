import React, { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { Menu, X } from 'lucide-react';
import { useAuth } from '../context/AuthContext';

const Navbar: React.FC = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const { user, isAuthenticated, logout } = useAuth();
  const navigate = useNavigate();

  const handleLogout = () => {
    logout();
    navigate('/');
  };

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  return (
    <nav className="navbar">
      <div className="logo">
        <img src="/aa.jpg" alt="Logo" className="logo-img" />
        <span className="brand-name">YETRAM WATER WASH</span>
      </div>
      
      <button className="hamburger" onClick={toggleMenu}>
        {isMenuOpen ? <X size={26} /> : <Menu size={26} />}
      </button>
      
      <div className={`menu ${isMenuOpen ? 'active' : ''}`}>
        <Link to="/" onClick={() => setIsMenuOpen(false)}>Home</Link>
        <Link to="/gallery" onClick={() => setIsMenuOpen(false)}>Gallery</Link>
        <Link 
          to={isAuthenticated ? "/dashboard" : "/login"} 
          onClick={() => setIsMenuOpen(false)}
        >
          Book Service
        </Link>
        
        {isAuthenticated ? (
          <button onClick={handleLogout} className="login-btn">
            Logout
          </button>
        ) : (
          <Link to="/login" onClick={() => setIsMenuOpen(false)}>
            <button className="login-btn">Login</button>
          </Link>
        )}
      </div>
    </nav>
  );
};

export default Navbar;