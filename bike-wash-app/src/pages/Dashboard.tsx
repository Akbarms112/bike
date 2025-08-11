import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';
import { bookingAPI } from '../services/api';
import { BookingFormData } from '../types';

const Dashboard: React.FC = () => {
  const [formData, setFormData] = useState<BookingFormData>({
    username: '',
    phone: '',
    email: '',
    pickup_address: '',
    drop_address: '',
    bike_model: '',
    bike_number: '',
    bike_color: '',
    selected_option: 'pickup'
  });
  const [isLoading, setIsLoading] = useState(false);
  
  const navigate = useNavigate();

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  const setOption = (option: 'pickup' | 'drop' | 'both') => {
    setFormData({
      ...formData,
      selected_option: option
    });
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setIsLoading(true);

    try {
      // This would typically navigate to a shops listing page
      // For now, we'll just show an alert
      alert('Finding nearby shops...');
      // You can implement the shop finding logic here
      // const response = await bookingAPI.findShops(formData);
    } catch (error) {
      alert('Error finding shops. Please try again.');
    } finally {
      setIsLoading(false);
    }
  };

  return (
    <div className="dashboard-container">
      <nav className="navbar">
        Bike Wash Booking
      </nav>

      <div className="container">
        <form onSubmit={handleSubmit}>
          <h2>Your Information</h2>
          <label>NAME:</label>
          <input
            type="text"
            name="username"
            placeholder="Full Name"
            value={formData.username}
            onChange={handleChange}
            required
          />
          
          <label>PHONE NUMBER:</label>
          <input
            type="tel"
            name="phone"
            placeholder="Phone Number"
            value={formData.phone}
            onChange={handleChange}
            required
          />
          
          <label>EMAIL:</label>
          <input
            type="email"
            name="email"
            placeholder="Email"
            value={formData.email}
            onChange={handleChange}
            required
          />

          <div className="options">
            <button
              type="button"
              onClick={() => setOption('pickup')}
              className={formData.selected_option === 'pickup' ? 'active' : ''}
            >
              Pickup
            </button>
            <button
              type="button"
              onClick={() => setOption('drop')}
              className={formData.selected_option === 'drop' ? 'active' : ''}
            >
              Drop
            </button>
            <button
              type="button"
              onClick={() => setOption('both')}
              className={formData.selected_option === 'both' ? 'active' : ''}
            >
              Pick & Drop
            </button>
          </div>

          <div className="address-section">
            <label>
              {formData.selected_option === 'drop' ? 'DROP ADDRESS:' : 'PICKUP ADDRESS:'}
            </label>
            <input
              type="text"
              name="pickup_address"
              placeholder="Enter Address"
              value={formData.pickup_address}
              onChange={handleChange}
              required
            />
          </div>

          {formData.selected_option === 'both' && (
            <div className="address-section">
              <label>DROP ADDRESS:</label>
              <input
                type="text"
                name="drop_address"
                placeholder="Enter Drop Address"
                value={formData.drop_address}
                onChange={handleChange}
              />
            </div>
          )}

          <h2>Bike Details</h2>
          <label>BIKE MODEL:</label>
          <input
            type="text"
            name="bike_model"
            placeholder="Bike Name/Model"
            value={formData.bike_model}
            onChange={handleChange}
            required
          />
          
          <label>BIKE NUMBER:</label>
          <input
            type="text"
            name="bike_number"
            placeholder="Bike Number"
            value={formData.bike_number}
            onChange={handleChange}
            required
          />
          
          <label>BIKE COLOR:</label>
          <input
            type="text"
            name="bike_color"
            placeholder="Bike Color"
            value={formData.bike_color}
            onChange={handleChange}
            required
          />

          <button type="submit" disabled={isLoading}>
            {isLoading ? 'Finding...' : 'Find Nearby Centers'}
          </button>
        </form>
      </div>

      <footer className="footer">
        © 2025 Bike Wash Booking | All Rights Reserved
      </footer>
    </div>
  );
};

export default Dashboard;