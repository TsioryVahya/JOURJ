import React from 'react';
import { Routes, Route, Navigate } from 'react-router-dom';
import Layout from '../components/layout/Layout';
import Dashboard from '../pages/Dashboard';
import Products from '../pages/Products';
import Customers from '../pages/Customers';
import Orders from '../pages/Orders';
import RequestDetail from '../pages/RequestDetail';

const AppRouter = () => {
  return (
    <Routes>
      {/* Route pour le détail (Sans Layout) */}
      <Route path="/demande/detail/:id" element={<RequestDetail />} />

      {/* Routes du BackOffice (Avec Layout) */}
      <Route path="/" element={<Layout />}>
        <Route index element={<Navigate to="/dashboard" replace />} />
        <Route path="dashboard" element={<Dashboard />} />
        <Route path="produits" element={<Products />} />
        <Route path="clients" element={<Customers />} />
        <Route path="commandes" element={<Orders />} />
      </Route>

      {/* Redirection par défaut */}
      <Route path="*" element={<Navigate to="/dashboard" replace />} />
    </Routes>
  );
};

export default AppRouter;
