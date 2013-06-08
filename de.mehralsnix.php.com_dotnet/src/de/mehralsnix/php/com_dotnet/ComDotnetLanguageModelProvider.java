/**
 * 
 */
package de.mehralsnix.php.com_dotnet;

import org.eclipse.core.runtime.IPath;
import org.eclipse.core.runtime.Path;
import org.eclipse.core.runtime.Plugin;
import org.eclipse.dltk.core.IScriptProject;
import org.eclipse.php.core.language.ILanguageModelProvider;

/**
 * @author sardroumli
 *
 */
public class ComDotnetLanguageModelProvider extends Plugin implements ILanguageModelProvider {
	
	private static ComDotnetLanguageModelProvider plugin;

	public ComDotnetLanguageModelProvider() {

	}

	public static ComDotnetLanguageModelProvider getDefault() {
		
		if( plugin == null ) {
			plugin = new ComDotnetLanguageModelProvider();
		}

		return plugin;
	}
	
	/* (non-Javadoc)
	 * @see org.eclipse.php.core.language.ILanguageModelProvider#getName()
	 */
	@Override
	public String getName() {
		return "COM and .Net API";
	}

	/* (non-Javadoc)
	 * @see org.eclipse.php.core.language.ILanguageModelProvider#getPlugin()
	 */
	@Override
	public Plugin getPlugin() {
		return ComDotnetLanguageModelProvider.getDefault();
	}

	@Override
	public IPath getPath(IScriptProject project) {
		return new Path("resources/com_dotnet");
	}

}
