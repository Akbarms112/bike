import React from 'react';
import { Phone, Mail, MapPin, Clock, Facebook, Twitter, Instagram } from 'lucide-react';

const Footer: React.FC = () => {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="footer">
      <div className="container">
        <div className="footer-grid">
          <div className="footer-section">
            <h3>BikeWash</h3>
            <ul>
              <li>
                <Phone className="icon" size={16} />
                Professional bike washing services.
              </li>
              <li>
                <Phone className="icon" size={16} />
                We care for your bike like it's our own.
              </li>
            </ul>
            <div className="social-links">
              <a href="#"><Facebook size={16} /></a>
              <a href="#"><Twitter size={16} /></a>
              <a href="#"><Instagram size={16} /></a>
            </div>
          </div>

          <div className="footer-section">
            <h3>Contact Us</h3>
            <ul>
              <li>
                <Phone className="icon" size={16} />
                +91 9452345876
              </li>
              <li>
                <Mail className="icon" size={16} />
                contact@bikewash.com
              </li>
              <li>
                <MapPin className="icon" size={16} />
                123 Wash Street, Bike City, BC 12345
              </li>
            </ul>
          </div>

          <div className="footer-section">
            <h3>Working Hours</h3>
            <ul>
              <li>
                <Clock className="icon" size={16} />
                Monday - Friday: 8:00 AM - 8:00 PM
              </li>
              <li>
                <Clock className="icon" size={16} />
                Saturday - Sunday: 9:00 AM - 6:00 PM
              </li>
            </ul>
          </div>
        </div>

        <div className="footer-bottom">
          <p>&copy; {currentYear} BikeWash. All rights reserved.</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;