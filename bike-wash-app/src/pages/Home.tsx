import React from 'react';
import Hero from '../components/Hero';
import Services from '../components/Services';
import HowItWorks from '../components/HowItWorks';

const Home: React.FC = () => {
  return (
    <div>
      <Hero />
      <Services />
      <HowItWorks />
    </div>
  );
};

export default Home;