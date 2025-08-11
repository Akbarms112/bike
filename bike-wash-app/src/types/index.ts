export interface User {
  id: number;
  full_name: string;
  email: string;
}

export interface Booking {
  id: number;
  user: string;
  phone: string;
  email: string;
  bike_model: string;
  bike_number: string;
  bike_color: string;
  shop_name: string;
  pickup_address: string;
  drop_address: string;
  pickup_option: 'you' | 'us';
  status: 'Not Paid' | 'Paid' | 'Completed' | 'Cancelled';
  amount: number;
  booking_time: string;
  pickup_time?: string;
  drop_time?: string;
}

export interface Shop {
  name: string;
  lat: number;
  lon: number;
  rating: number;
}

export interface BookingFormData {
  username: string;
  phone: string;
  email: string;
  pickup_address?: string;
  drop_address?: string;
  bike_model: string;
  bike_number: string;
  bike_color: string;
  selected_option: 'pickup' | 'drop' | 'both';
}

export interface LoginFormData {
  email: string;
  password: string;
}

export interface SignupFormData {
  fullName: string;
  email: string;
  password: string;
}