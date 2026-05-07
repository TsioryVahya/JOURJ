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
          <div style={{ backgroundColor: 'var(--accent-color)', padding: '5px', borderRadius: '8px', display: 'flex' }}>
            <Search size={20} color="white" />
          </div>
          <span>JOURJ Admin</span>
        </div>
      </div>

      {/* <div className="header-right">
        <div className="user-menu">
          <Bell size={20} color="var(--text-muted)" />
          <div className="user-avatar">
            <User size={20} color="white" />
          </div>
          <span style={{ fontWeight: '500' }}>Admin User</span>
        </div>
      </div> */}
    </header>
  );
};

export default Header;
