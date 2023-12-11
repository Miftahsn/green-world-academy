import React from 'react';
import Nav from '../components/Nav';
import Hero from '../components/Hero';
import Welcome from '../components/Welcome';
import Metode from '../components/Metode';
import Classes from '../components/Classes';
import Footer from '../components/Footer';


const Home = () => {
  return (
    <div>
      <Nav/>
      <Hero/>
      <Welcome/>
      <Metode/>
      <Classes/>
      <Footer/>
    </div>
  )
}

export default Home