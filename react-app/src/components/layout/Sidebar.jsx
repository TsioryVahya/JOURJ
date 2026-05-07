import React from 'react';
import { Link, useLocation } from 'react-router-dom';
import { 
  LayoutDashboard, 
  Package, 
  Users, 
  ShoppingCart, 
  Layers, 
  Settings,
  ChevronLeft,
  ChevronRight
} from 'lucide-react';

const Sidebar = ({ isCollapsed, toggleSidebar }) => {
  const location = useLocation();

  const menuItems = [
    { icon: <LayoutDashboard size={22} />, label: 'Tableau de bord', path: '/dashboard' },
    { icon: <Package size={22} />, label: 'Produits', path: '/produits' },
    { icon: <Users size={22} />, label: 'Clients', path: '/clients' },
    { icon: <ShoppingCart size={22} />, label: 'Commandes', path: '/commandes' },
    { icon: <Layers size={22} />, label: 'Modules', path: '#' },
    { icon: <Settings size={22} />, label: 'Paramètres', path: '#' },
  ];

  return (
    <aside className={`sidebar ${isCollapsed ? 'collapsed' : ''}`}>
      <div className="sidebar-header">
        <h2 style={{ fontSize: '1.5rem', fontWeight: 'bold', display: isCollapsed ? 'none' : 'block' }}>
          Admin
        </h2>
        {isCollapsed && <div style={{ fontSize: '1.2rem', fontWeight: 'bold' }}>A</div>}
      </div>
      
      <nav className="sidebar-nav">
        {menuItems.map((item, index) => {
          const isActive = location.pathname === item.path;
          return (
            <Link 
              key={index} 
              to={item.path} 
              className={`nav-item ${isActive ? 'active' : ''}`}
            >
              {item.icon}
              <span>{item.label}</span>
            </Link>
          );
        })}
      </nav>

      <div style={{ padding: '1rem', borderTop: '1px solid rgba(255,255,255,0.1)', display: 'flex', justifyContent: 'center' }}>
        <button className="toggle-btn" onClick={toggleSidebar}>
          {isCollapsed ? <ChevronRight size={20} /> : <ChevronLeft size={20} />}
        </button>
      </div>
    </aside>
  );
};

export default Sidebar;
