import React from 'react';
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
  const menuItems = [
    { icon: <LayoutDashboard size={22} />, label: 'Tableau de bord', active: true },
    { icon: <Package size={22} />, label: 'Produits' },
    { icon: <Users size={22} />, label: 'Clients' },
    { icon: <ShoppingCart size={22} />, label: 'Commandes' },
    { icon: <Layers size={22} />, label: 'Modules' },
    { icon: <Settings size={22} />, label: 'Paramètres' },
  ];

  return (
    <aside className={`sidebar ${isCollapsed ? 'collapsed' : ''}`}>
      <div className="sidebar-header">
        <h2 style={{ fontSize: '1.5rem', fontWeight: 'bold', display: isCollapsed ? 'none' : 'block' }}>
          JOURJ
        </h2>
        {isCollapsed && <div style={{ fontSize: '1.2rem', fontWeight: 'bold' }}>J</div>}
      </div>
      
      <nav className="sidebar-nav">
        {menuItems.map((item, index) => (
          <a key={index} href="#" className={`nav-item ${item.active ? 'active' : ''}`}>
            {item.icon}
            <span>{item.label}</span>
          </a>
        ))}
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
