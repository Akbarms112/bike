import React, { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import { bookingAPI } from '../services/api';
import { Booking } from '../types';

const AdminDashboard: React.FC = () => {
  const [bookings, setBookings] = useState<Booking[]>([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState('');

  useEffect(() => {
    fetchBookings();
  }, []);

  const fetchBookings = async () => {
    try {
      const response = await bookingAPI.getBookings();
      if (response.status === 'success') {
        setBookings(response.data);
      } else {
        setError('Failed to fetch bookings');
      }
    } catch (err) {
      setError('Error fetching bookings');
    } finally {
      setIsLoading(false);
    }
  };

  if (isLoading) {
    return <div className="loading">Loading bookings...</div>;
  }

  if (error) {
    return <div className="error">{error}</div>;
  }

  return (
    <div className="admin-container">
      <div className="container">
        <h2>Admin Dashboard - Bookings</h2>
        <div className="table-container">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>User</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Bike Model</th>
                <th>Bike Number</th>
                <th>Bike Color</th>
                <th>Shop Name</th>
                <th>Pickup Address</th>
                <th>Drop Address</th>
                <th>Pickup Option</th>
                <th>Status</th>
                <th>Amount (₹)</th>
                <th>Booking Time</th>
                <th>Pickup Time</th>
                <th>Drop Time</th>
              </tr>
            </thead>
            <tbody>
              {bookings.map((booking) => (
                <tr key={booking.id}>
                  <td>{booking.id}</td>
                  <td>{booking.user}</td>
                  <td>{booking.phone}</td>
                  <td>{booking.email}</td>
                  <td>{booking.bike_model}</td>
                  <td>{booking.bike_number}</td>
                  <td>{booking.bike_color}</td>
                  <td>{booking.shop_name}</td>
                  <td>{booking.pickup_address}</td>
                  <td>{booking.drop_address}</td>
                  <td>{booking.pickup_option === 'us' ? 'Pickup by Us' : 'Pickup by You'}</td>
                  <td>{booking.status}</td>
                  <td>₹{booking.amount}</td>
                  <td>{booking.booking_time}</td>
                  <td>{booking.pickup_time || '-'}</td>
                  <td>{booking.drop_time || '-'}</td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
        <Link to="/">
          <button className="home-btn">Click to Home</button>
        </Link>
      </div>
    </div>
  );
};

export default AdminDashboard;