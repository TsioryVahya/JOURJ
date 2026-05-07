import React from 'react';
import { useParams, useNavigate } from 'react-router-dom';
import { ArrowLeft } from 'lucide-react';

const RequestDetail = () => {
  const { id } = useParams();
  const navigate = useNavigate();

  return (
    <div style={{ padding: '2rem', backgroundColor: '#f8fafc', minHeight: '100vh' }}>
      <button 
        onClick={() => navigate(-1)}
        style={{ 
          display: 'flex', 
          alignItems: 'center', 
          gap: '0.5rem', 
          border: 'none', 
          background: 'none', 
          cursor: 'pointer',
          color: 'var(--accent-color)',
          fontWeight: '600',
          marginBottom: '2rem'
        }}
      >
        <ArrowLeft size={20} /> Retour
      </button>

      <div style={{ backgroundColor: 'white', padding: '3rem', borderRadius: '12px', boxShadow: '0 4px 6px -1px rgba(0,0,0,0.1)' }}>
        <h1 style={{ fontSize: '2rem', fontWeight: 'bold', marginBottom: '1rem' }}>
          Détail de la demande #{id}
        </h1>
        <hr style={{ margin: '2rem 0', borderColor: '#e2e8f0' }} />
        <p style={{ fontSize: '1.1rem', color: '#64748b' }}>
          Contenu détaillé pour la demande d'ID : <strong>{id}</strong>. 
          Cette page s'affiche sans le Header et la Sidebar du BackOffice.
        </p>
      </div>
    </div>
  );
};

export default RequestDetail;
