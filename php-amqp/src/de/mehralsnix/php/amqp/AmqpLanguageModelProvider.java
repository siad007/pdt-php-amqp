/**
 * 
 */
package de.mehralsnix.php.amqp;

import org.eclipse.core.runtime.IPath;
import org.eclipse.core.runtime.Path;
import org.eclipse.core.runtime.Plugin;
import org.eclipse.dltk.core.IScriptProject;
import org.eclipse.php.core.language.ILanguageModelProvider;

/**
 * @author sardroumli
 *
 */
public class AmqpLanguageModelProvider extends Plugin implements ILanguageModelProvider {
	
	private static AmqpLanguageModelProvider plugin;

	public AmqpLanguageModelProvider() {

	}

	public static AmqpLanguageModelProvider getDefault() {
		
		if( plugin == null ) {
			plugin = new AmqpLanguageModelProvider();
		}

		return plugin;
	}
	
	/* (non-Javadoc)
	 * @see org.eclipse.php.core.language.ILanguageModelProvider#getName()
	 */
	@Override
	public String getName() {
		return "AMQP API";
	}

	/* (non-Javadoc)
	 * @see org.eclipse.php.core.language.ILanguageModelProvider#getPlugin()
	 */
	@Override
	public Plugin getPlugin() {
		return AmqpLanguageModelProvider.getDefault();
	}

	@Override
	public IPath getPath(IScriptProject project) {
		return new Path("resources/amqp");
	}

}
