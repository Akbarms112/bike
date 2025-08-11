import axios from 'axios';
import { Booking, LoginFormData, SignupFormData, BookingFormData } from '../types';

const API_BASE_URL = 'http://localhost'; // Adjust this to your PHP server URL

const api = axios.create({
  baseURL: API_BASE_URL,
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded',
  },
});

// Auth API calls
export const authAPI = {
  login: async (data: LoginFormData) => {
    const formData = new URLSearchParams();
    formData.append('email', data.email);
    formData.append('password', data.password);
    
    const response = await api.post('/user_login.php', formData);
    return response.data;
  },

  signup: async (data: SignupFormData) => {
    const formData = new URLSearchParams();
    formData.append('fullName', data.fullName);
    formData.append('email', data.email);
    formData.append('password', data.password);
    
    const response = await api.post('/User_signup.php', formData);
    return response.data;
  },

  adminLogin: async (data: LoginFormData) => {
    const formData = new URLSearchParams();
    formData.append('email', data.email);
    formData.append('password', data.password);
    
    const response = await api.post('/Admine_login.php', formData);
    return response.data;
  },
};

// Booking API calls
export const bookingAPI = {
  findShops: async (data: BookingFormData) => {
    const formData = new URLSearchParams();
    Object.entries(data).forEach(([key, value]) => {
      if (value) formData.append(key, value.toString());
    });
    
    const response = await api.post('/find_shop.php', formData);
    return response.data;
  },

  createBooking: async (bookingData: any) => {
    const formData = new URLSearchParams();
    Object.entries(bookingData).forEach(([key, value]) => {
      if (value) formData.append(key, value.toString());
    });
    
    const response = await api.post('/book.php', formData);
    return response.data;
  },

  getBookings: async (): Promise<{ status: string; data: Booking[] }> => {
    const response = await api.get('/get_bookings.php');
    return response.data;
  },

  updateStatus: async (id: number, status: string, amount?: number) => {
    const formData = new URLSearchParams();
    formData.append('id', id.toString());
    formData.append('status', status);
    if (amount) formData.append('amount', amount.toString());
    
    const response = await api.post('/update_status.php', formData);
    return response.data;
  },

  updatePickup: async (id: number, pickupOption: string, amount: number) => {
    const formData = new URLSearchParams();
    formData.append('id', id.toString());
    formData.append('pickup_option', pickupOption);
    formData.append('amount', amount.toString());
    
    const response = await api.post('/update_pickup.php', formData);
    return response.data;
  },
};