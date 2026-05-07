import React from 'react';
import { User, Bell, Search, Menu } from 'lucide-react';

const Header = ({ isSidebarCollapsed, toggleSidebar }) => {
  return (
    <header className="header" style={{ left: isSidebarCollapsed ? '80px' : '260px' }}>
      <div className="header-left">
        <button className="toggle-btn" onClick={toggleSidebar}>
          <Menu size={24} />
        </button>
        <div className="logo-section">

          <span>Prestashop</span>
        </div>
      </div>


    </header>
  );
};

export default Header;
