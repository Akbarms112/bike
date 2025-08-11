import React from 'react';
import { Link } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';

const Hero: React.FC = () => {
  const { isAuthenticated } = useAuth();

  return (
    <div className="hero">
      <div className="hero-content">
        <h1>PROFESSIONAL BIKE WASHING SERVICE</h1>
        <p>We provide premium bike washing services at your doorstep. Your bike deserves the best care.</p>
        <Link to={isAuthenticated ? "/dashboard" : "/login"}>
          <button className="hero-btn">Book a Wash</button>
        </Link>
      </div>
    </div>
  );
};

export default Hero;