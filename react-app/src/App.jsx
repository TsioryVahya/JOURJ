import React from 'react';
import Layout from './components/layout/Layout';

function App() {
  return (
    <Layout>
      <div style={{ marginBottom: '2rem' }}>
        <h1 style={{ fontSize: '1.875rem', fontWeight: 'bold', color: 'var(--primary-color)' }}>
          Tableau de bord
        </h1>
        <p style={{ color: 'var(--text-muted)' }}>Bienvenue dans votre espace d'administration JOURJ.</p>
      </div>

      <div style={{ 
        display: 'grid', 
        gridTemplateColumns: 'repeat(auto-fit, minmax(240px, 1fr))', 
        gap: '1.5rem',
        marginBottom: '2rem' 
      }}>
        {/* Stat Cards */}
        {[
          { label: 'Ventes totales', value: '12,450 €', trend: '+12%' },
          { label: 'Nouveaux clients', value: '156', trend: '+5%' },
          { label: 'Commandes en cours', value: '42', trend: '-2%' },
          { label: 'Performance', value: '94%', trend: '+8%' }
        ].map((stat, i) => (
          <div key={i} style={{ 
            backgroundColor: 'white', 
            padding: '1.5rem', 
            borderRadius: '12px', 
            boxShadow: '0 1px 3px rgba(0,0,0,0.1)',
            border: '1px solid var(--border-color)'
          }}>
            <p style={{ color: 'var(--text-muted)', fontSize: '0.875rem', fontWeight: '500' }}>{stat.label}</p>
            <h3 style={{ fontSize: '1.5rem', fontWeight: 'bold', marginTop: '0.5rem' }}>{stat.value}</h3>
            <p style={{ 
              fontSize: '0.875rem', 
              color: stat.trend.startsWith('+') ? '#10b981' : '#ef4444',
              marginTop: '0.5rem',
              fontWeight: '600'
            }}>
              {stat.trend} depuis le mois dernier
            </p>
          </div>
        ))}
      </div>

      <div style={{ 
        backgroundColor: 'white', 
        padding: '2rem', 
        borderRadius: '12px', 
        boxShadow: '0 1px 3px rgba(0,0,0,0.1)',
        border: '1px solid var(--border-color)',
        minHeight: '300px'
      }}>
        <h2 style={{ fontSize: '1.25rem', fontWeight: 'bold', marginBottom: '1rem' }}>
          Activité récente
        </h2>
        <div style={{ color: 'var(--text-muted)', textAlign: 'center', marginTop: '4rem' }}>
          Graphiques et tableaux d'activité seront affichés ici.
        </div>
      </div>
    </Layout>
  );
}

export default App;
