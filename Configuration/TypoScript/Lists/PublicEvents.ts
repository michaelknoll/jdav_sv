#############################################
# JDAV Baden-W�rttemberg Schulungsverwaltung
# 
# TypoScript Konfiguration f�r pt_extlist
# Darstellung von Schulungen im Frontend
# 
# @author Michael Knoll <mimi@kaktusteam.de>
#############################################


plugin.tx_ptextlist.settings.listConfig.publicEvents {

    backendConfig < plugin.tx_ptextlist.prototype.backend.extbase
    backendConfig {
        repositoryClassName = Tx_JdavSv_Domain_Repository_EventRepository
        sorting = dateStart
    }
    
    
    
    fields {
    
        event {
            table = __self__
            field = __object__
        }
    
        dateStart {
            table = __self__
            field = dateStart
        }
        
        dateEnd {
            table = __self__
            field = dateEnd 
        }
        
        title {
            table = __self__
            field = titel
        }
        
        category {
            table = __self__
            field = category
        }
        
        accreditationNumber {
            table = __self__
            field = accreditationNumber
        }
        
        price {
            table = __self__
            field = price
        }
        
        maxRegistrations {
            table = __self__
            field = maxRegistrations
        }
    
    }
    
    
    
    columns {
    
        10 {
            fieldIdentifier = dateStart
            columnIdentifier = dateStart
            label = Beginn
        }
        
        20 {
            fieldIdentifier = dateEnd
            columnIdentifier = dateEnd
            label = Ende
        }
        
        30 {
            fieldIdentifier = title
            columnIdentifier = title
            label = Titel
        }
    
    }

}